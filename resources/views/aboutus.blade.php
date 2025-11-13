@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('css')
<link href="{{env('AWS_R2_URL')}}/frontend/css/breadcrumb_style.scss.css" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{env('AWS_R2_URL')}}/frontend/css/style_page.scss.css" type="text/css">
<link href="{{env('AWS_R2_URL')}}/frontend/css/style_page.scss.css" rel="stylesheet" type="text/css" media="all" />
<style>
.video-item {
  position: relative;
  cursor: pointer;
  overflow: hidden;
}
.video-item .play-button-overlay {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  pointer-events: none;
  transition: all 0.3s ease;
}
.video-item:hover .play-button-overlay {
  transform: translate(-50%, -50%) scale(1.1);
}
.video-item:hover img {
  opacity: 0.9;
}
.video-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.9);
  overflow: auto;
}
.video-modal-content {
  position: relative;
  margin: 5% auto;
  width: 90%;
  max-width: 900px;
}
.video-modal-close {
  position: absolute;
  top: -40px;
  right: 0;
  color: #fff;
  font-size: 40px;
  font-weight: bold;
  cursor: pointer;
  z-index: 10000;
}
.video-modal-close:hover {
  color: #ccc;
}
.video-container {
  position: relative;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}
.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.image-modal {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.95);
  overflow: hidden;
}
.image-modal img {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  max-width: 200%;
  max-height: 200%;
  width: auto;
  height: auto;
  object-fit: contain;
}
.image-modal-close {
  position: absolute;
  top: 20px;
  right: 35px;
  color: #fff;
  font-size: 40px;
  font-weight: bold;
  cursor: pointer;
  z-index: 10001;
}
.image-modal-close:hover {
  color: #ccc;
}
.image-nav-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0,0,0,0.5);
  border: none;
  cursor: pointer;
  padding: 15px;
  z-index: 10001;
  border-radius: 4px;
  transition: background 0.3s ease;
}
.image-nav-btn:hover {
  background: rgba(0,0,0,0.8);
}
.prev-btn {
  left: 20px;
}
.next-btn {
  right: 20px;
}
.cert-clickable:hover {
  opacity: 0.85;
  transition: opacity 0.3s ease;
}
</style>
@endsection
@section('js')
@endsection
@section('content')
<div class="bodywrap">
<section class="bread-crumb" style="background-image: url({{asset('frontend/images/ngang.jpg')}});">
   <div class="container">
      
   </div>
</section>
<section class="page page_about">
   <div class="container">
      <ul class="breadcrumb" >
         <li class="home">
            <a  href="/" ><span >Trang chủ</span></a>						
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li><strong ><span>Về chúng tôi</span></strong></li>
      </ul>
   
   </div>
   <section class="section_about_1">
      <div class="container">
         {!!$gioithieu->content!!}
      </div>
       
   </section>
  <div class="container">
    <hr>
  </div>
  <section class="album_chungnhan">
   <h1 class="chungnhan">Chứng nhận</h1>
		<div class="container">
         <div class="row">
				@php $certIndex = 0; @endphp
				@foreach($album as $item)
	      	@if(isset($item->status) && (int)$item->status === 1)

					<div class="col-6 col-md-3 col-lg-3 mb-3">
						<div class="cert-item cert-clickable" onclick="openImageModal('{{$item->image}}', {{$certIndex}})" style="cursor: pointer;">
							<img src="{{$item->image}}" class="img-fluid"/>
                     <div class="title_chungnhan">{{$item->name}}</div>
						</div>
					</div>
					@php $certIndex++; @endphp
	      	@endif
				@endforeach
			</div>
		
		</div>
  </section>
  <!-- Video section -->
  <section class="album_video">
    <h1 class="chungnhan">Video</h1>
    <div class="container">
      <div class="row">
        @foreach($album as $item)
          @if(isset($item->status) && (int)$item->status === 0)
            <div class="col-6 col-md-4 col-lg-4 mb-4">
              <div class="cert-item video-item" data-video-url="{{$item->link}}" onclick="openVideoModal(this)">
                <img src="{{$item->image}}" class="img-fluid"/>
                <div class="play-button-overlay">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="60" height="60">
                    <circle cx="12" cy="12" r="10" fill="rgba(0,0,0,0.6)"/>
                    <path d="M9.5 8.5l7 3.5-7 3.5V8.5z"/>
                  </svg>
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </section>

  <!-- Video Modal -->
  <div id="videoModal" class="video-modal" onclick="closeVideoModal(event)">
    <div class="video-modal-content">
      <span class="video-modal-close" onclick="closeVideoModal(event)">&times;</span>
      <div class="video-container">
        <iframe id="videoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <!-- Image Modal -->
  <div id="imageModal" class="image-modal" onclick="closeImageModal(event)">
    <span class="image-modal-close" onclick="closeImageModal(event)">&times;</span>
    <button class="image-nav-btn prev-btn" onclick="navigateImage(-1)">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="40" height="40">
        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
      </svg>
    </button>
    <img id="modalImage" src="" alt="Certificate">
    <button class="image-nav-btn next-btn" onclick="navigateImage(1)">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="40" height="40">
        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
      </svg>
    </button>
  </div>

   <script>
      // Certificate images array
      var certImages = [];
      var currentImageIndex = 0;
      
      // Collect all certificate images on page load
      document.addEventListener('DOMContentLoaded', function() {
        var items = @json($album->filter(function($item) { return isset($item->status) && (int)$item->status === 1; })->values());
        certImages = items.map(function(item) { return item.image; });
      });
      
      function openImageModal(imageSrc, index) {
        currentImageIndex = index;
        document.getElementById('modalImage').src = imageSrc;
        document.getElementById('imageModal').style.display = 'block';
        document.body.style.overflow = 'hidden';
      }
      
      function closeImageModal(event) {
        if (event.target.id === 'imageModal' || event.target.className === 'image-modal-close') {
          document.getElementById('imageModal').style.display = 'none';
          document.body.style.overflow = 'auto';
        }
      }
      
      function navigateImage(direction) {
        currentImageIndex += direction;
        if (currentImageIndex < 0) {
          currentImageIndex = certImages.length - 1;
        } else if (currentImageIndex >= certImages.length) {
          currentImageIndex = 0;
        }
        document.getElementById('modalImage').src = certImages[currentImageIndex];
      }
      
      // Keyboard navigation
      document.addEventListener('keydown', function(event) {
        var modal = document.getElementById('imageModal');
        if (modal.style.display === 'block') {
          if (event.key === 'ArrowLeft') {
            navigateImage(-1);
          } else if (event.key === 'ArrowRight') {
            navigateImage(1);
          } else if (event.key === 'Escape') {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
          }
        }
      });
      
      function openVideoModal(element) {
        var videoUrl = element.getAttribute('data-video-url');
        if (videoUrl && videoUrl.trim() !== '') {
          // Convert YouTube URL to embed format
          var embedUrl = videoUrl;
          
          // Handle youtube.com/watch?v= format
          if (videoUrl.includes('youtube.com/watch?v=')) {
            var videoId = videoUrl.split('v=')[1];
            var ampersandPosition = videoId.indexOf('&');
            if (ampersandPosition !== -1) {
              videoId = videoId.substring(0, ampersandPosition);
            }
            embedUrl = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
          } 
          // Handle youtu.be/ format
          else if (videoUrl.includes('youtu.be/')) {
            var videoId = videoUrl.split('youtu.be/')[1].split('?')[0];
            embedUrl = 'https://www.youtube.com/embed/' + videoId + '?autoplay=1&rel=0';
          }
          // Handle youtube.com/embed/ format
          else if (videoUrl.includes('youtube.com/embed/')) {
            if (!videoUrl.includes('?')) {
              embedUrl = videoUrl + '?autoplay=1&rel=0';
            } else {
              embedUrl = videoUrl + '&autoplay=1&rel=0';
            }
          }
          // If already an embed URL, use it directly
          else if (videoUrl.includes('youtube.com')) {
            embedUrl = videoUrl;
          }
          
          console.log('Original URL:', videoUrl);
          console.log('Embed URL:', embedUrl);
          
          document.getElementById('videoFrame').src = embedUrl;
          document.getElementById('videoModal').style.display = 'block';
          document.body.style.overflow = 'hidden';
        } else {
          alert('Không có link video');
        }
      }
      
      function closeVideoModal(event) {
        if (event.target.id === 'videoModal' || event.target.className === 'video-modal-close') {
          document.getElementById('videoModal').style.display = 'none';
          document.getElementById('videoFrame').src = '';
          document.body.style.overflow = 'auto';
        }
      }
      
      $(document).ready(function ($) {
      	function runSwiperTeam() {
      		var swiper_team = null;
      		function initSwiperTeam() {
      			swiper_team = new Swiper('.swiper_team', {
      				slidesPerView: 3,
      				spaceBetween: 20,
      				watchOverflow: true,
      				slidesPerGroup: 1,
      				grabCursor: true,
      				loop: true,
      				navigation: {
      					nextEl: '.section_team .swiper-button-next',
      					prevEl: '.section_team .swiper-button-prev',
      				},
      				breakpoints: {
      					280: {
      						slidesPerView: 1,
      						spaceBetween: 14
      					},
      					450: {
      						slidesPerView: 1.3,
      						spaceBetween: 14
      					},
      					640: {
      						slidesPerView: 2,
      						spaceBetween: 14
      					},
      					768: {
      						slidesPerView: 2,
      						spaceBetween: 14
      					},
      					992: {
      						slidesPerView: 2,
      						spaceBetween: 20
      					},
      					1024: {
      						slidesPerView: 2.5,
      						spaceBetween: 20
      					},
      					1200: {
      						slidesPerView: 3,
      						spaceBetween: 20
      					}
      				}
      			});
      		}
      		function toggleSwiperTeam() {
      			initSwiperTeam();
      		}
      		toggleSwiperTeam();
      		$(window).on('resize', function() {
      			toggleSwiperTeam();
      		});
      	}
      	runSwiperTeam();
      });
   </script>


@endsection