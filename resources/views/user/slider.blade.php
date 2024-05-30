<div class="container-fluid">
  <!-- navbar section -->
  @include('user.navigation')

  <!-- Slider Section -->

  <section class="container">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active rounded-circle" aria-current="true" aria-label="Slide 1" style="height: 10px; width: 10px"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="height: 10px; width: 10px" class="rounded-circle"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="height: 10px; width: 10px" class="rounded-circle"></button>
      </div>
      <div class="carousel-inner imagShadow rounded-5">
        <div class="carousel-item active">
          <img src="{{asset('assets/userpage/Image/slider-one.jpg')}}" class="d-block rounded-5 sliderImage" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="{{asset('assets/userpage/Image/slider-two.jpg')}}" class="d-block w-100 rounded-5 sliderImage" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="{{asset('assets/userpage/Image/slider-two.jpg')}}" class="d-block w-100 rounded-5 sliderImage" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

</div>