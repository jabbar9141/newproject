
@extends('main-template')

@section('section')

@include('partials.modals.3d_video_ad')
<div class="swiper-container swiper-container-mx-negative swiper-init pt-3"
     data-swiper="{&quot;slidesPerView&quot;:4,&quot;spaceBetween&quot;:20,&quot;roundLengths&quot;:true,&quot;breakpoints&quot;:{&quot;1200&quot;:{&quot;slidesPerView&quot;:3},&quot;991&quot;:{&quot;slidesPerView&quot;:2},&quot;565&quot;:{&quot;slidesPerView&quot;:1}},&quot;pagination&quot;:{&quot;el&quot;:&quot;.swiper-pagination&quot;,&quot;clickable&quot;:true,&quot;dynamicBullets&quot;:true}}">
    <!-- Additional required wrapper-->
    <div class="swiper-wrapper pb-5">
      <!-- Slides-->
      @foreach ($favorits as $fav)
      <div class="swiper-slide h-auto px-2">
        <!-- place item-->
        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e33b1527bfe2abaf92">
          <div class="card h-100 border-0 shadow">
            <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="img/photo/photo-1484154218962-a197022b5858.jpg" alt="Modern, Well-Appointed Room"/><a class="tile-link" href="{{route('getFavoritos')}}"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <div class="d-flex text-white text-sm align-items-center"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="img/avatar/avatar-0.jpg" alt="Pamela"/>
                  <div>{{$fav->user->name}}</div>
                </div>
              </div>
              <div class="card-img-overlay-top text-end">

                {{-- <a class="card-fav-icon position-relative z-index-40" href="javascript: void();"> --}}
                  {{-- <svg class="svg-icon text-white"> --}}
                    {{-- <use xlink:href="#heart-1"> </use> --}}

                  {{-- </svg>
                </a> --}}
            </div>
            </div>
            <div class="card-body d-flex align-items-center">
              <div class="w-100">
                <h6 class="card-title">
                    <a target="_blank" href="{{ route('parking-lot',$fav->grParkingSpace->id) }}">{{ $fav->grParkingSpace->es_street . ',' . $fav->grParkingSpace->es_zone }}</a></h6>
                <div class="d-flex card-subtitle mb-3">
                  <p class="flex-grow-1 mb-0 text-muted text-sm">
                    {{(Str::length($fav->grParkingSpace->es_description) > 50) ? Str::substr($fav->grParkingSpace->es_description, 0,35).'...':$fav->grParkingSpace->es_description}}
                  </p>
                  <p class="flex-shrink-1 mb-0 card-stars text-xs text-end">
                    <a href="{{route('favorite',$fav->grParkingSpace->id)}}" class="class_icons_like_link" >
                        <img class="class_icons_like" src="{{asset('img/icons8-heart-suit-48.png')}}">
                    </a>
                  </p>
                </div>
                <p class="card-text text-muted"><span class="h4 text-primary">${{$fav->grParkingSpace->price}}</span> per night</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      {{-- <div class="swiper-slide h-auto px-2">
        <!-- place item-->
        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e322f3375db4d89128">
          <div class="card h-100 border-0 shadow">
            <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="img/photo/photo-1426122402199-be02db90eb90.jpg" alt="Cute Quirky Garden apt, NYC adjacent"/><a class="tile-link" href="detail-rooms.html"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <div class="d-flex text-white text-sm align-items-center"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="img/avatar/avatar-7.jpg" alt="John"/>
                  <div>John</div>
                </div>
              </div>
              <div class="card-img-overlay-top text-end"><a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a></div>
            </div>
            <div class="card-body d-flex align-items-center">
              <div class="w-100">
                <h6 class="card-title"><a class="text-decoration-none text-dark" href="detail-rooms.html">Cute Quirky Garden apt, NYC adjacent</a></h6>
                <div class="d-flex card-subtitle mb-3">
                  <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                  <p class="flex-shrink-1 mb-0 card-stars text-xs text-end"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                  </p>
                </div>
                <p class="card-text text-muted"><span class="h4 text-primary">$121</span> per night</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="swiper-slide h-auto px-2">
        <!-- place item-->
        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e3a31e62979bf147c9">
          <div class="card h-100 border-0 shadow">
            <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="img/photo/photo-1512917774080-9991f1c4c750.jpg" alt="Modern Apt - Vibrant Neighborhood!"/><a class="tile-link" href="detail-rooms.html"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <div class="d-flex text-white text-sm align-items-center"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="img/avatar/avatar-8.jpg" alt="Julie"/>
                  <div>Julie</div>
                </div>
              </div>
              <div class="card-img-overlay-top text-end"><a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a></div>
            </div>
            <div class="card-body d-flex align-items-center">
              <div class="w-100">
                <h6 class="card-title"><a class="text-decoration-none text-dark" href="detail-rooms.html">Modern Apt - Vibrant Neighborhood!</a></h6>
                <div class="d-flex card-subtitle mb-3">
                  <p class="flex-grow-1 mb-0 text-muted text-sm">Entire apartment</p>
                  <p class="flex-shrink-1 mb-0 card-stars text-xs text-end"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i><i class="fa fa-star text-gray-300">                                  </i>
                  </p>
                </div>
                <p class="card-text text-muted"><span class="h4 text-primary">$75</span> per night</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="swiper-slide h-auto px-2">
        <!-- place item-->
        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e3503eb77d487e8082">
          <div class="card h-100 border-0 shadow">
            <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="img/photo/photo-1494526585095-c41746248156.jpg" alt="Sunny Private Studio-Apartment"/><a class="tile-link" href="detail-rooms.html"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <div class="d-flex text-white text-sm align-items-center"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="img/avatar/avatar-9.jpg" alt="Barbora"/>
                  <div>Barbora</div>
                </div>
              </div>
              <div class="card-img-overlay-top text-end"><a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a></div>
            </div>
            <div class="card-body d-flex align-items-center">
              <div class="w-100">
                <h6 class="card-title"><a class="text-decoration-none text-dark" href="detail-rooms.html">Sunny Private Studio-Apartment</a></h6>
                <div class="d-flex card-subtitle mb-3">
                  <p class="flex-grow-1 mb-0 text-muted text-sm">Shared room</p>
                  <p class="flex-shrink-1 mb-0 card-stars text-xs text-end"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-gray-300">                                  </i>
                  </p>
                </div>
                <p class="card-text text-muted"><span class="h4 text-primary">$93</span> per night</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="swiper-slide h-auto px-2">
        <!-- place item-->
        <div class="w-100 h-100 hover-animate" data-marker-id="59c0c8e39aa2eed0626e485d">
          <div class="card h-100 border-0 shadow">
            <div class="card-img-top overflow-hidden gradient-overlay"> <img class="img-fluid" src="img/photo/photo-1522771739844-6a9f6d5f14af.jpg" alt="Mid-Century Modern Garden Paradise"/><a class="tile-link" href="detail-rooms.html"></a>
              <div class="card-img-overlay-bottom z-index-20">
                <div class="d-flex text-white text-sm align-items-center"><img class="avatar avatar-border-white flex-shrink-0 me-2" src="img/avatar/avatar-10.jpg" alt="Jack"/>
                  <div>Jack</div>
                </div>
              </div>
              <div class="card-img-overlay-top text-end"><a class="card-fav-icon position-relative z-index-40" href="javascript: void();">
                  <svg class="svg-icon text-white">
                    <use xlink:href="#heart-1"> </use>
                  </svg></a></div>
            </div>
            <div class="card-body d-flex align-items-center">
              <div class="w-100">
                <h6 class="card-title"><a class="text-decoration-none text-dark" href="detail-rooms.html">Mid-Century Modern Garden Paradise</a></h6>
                <div class="d-flex card-subtitle mb-3">
                  <p class="flex-grow-1 mb-0 text-muted text-sm">Entire house</p>
                  <p class="flex-shrink-1 mb-0 card-stars text-xs text-end"><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i><i class="fa fa-star text-warning"></i>
                  </p>
                </div>
                <p class="card-text text-muted"><span class="h4 text-primary">$115</span> per night</p>
              </div>
            </div>
          </div>
        </div>
      </div> --}}
      {{-- <div class="swiper-slide h-auto px-2">
        <!-- place item-->

      </div> --}}
    </div>
    <!-- If we need pagination-->
    <div class="swiper-pagination"></div>
  </div>
@endsection


