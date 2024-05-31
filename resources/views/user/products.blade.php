<!DOCTYPE html>
<html lang="en">

<head>
  @include('user.header')
</head>

<body>
  @include('user.navigation')
  <section class="container">
    <div>
      <img
        src="{{asset('assets/userpage/Image/category.png')}}"
        alt="Category Image"
        style="width: 300px;"
      />
    </div>
    <div class="row align-items-center">
      <div class="col-12 mb-3">
        <input type="text" class="form-control" id="searchInput" placeholder="Search products...">
      </div>
      @foreach($products as $product)
        <div class="col-12 col-sm-4 py-3 d-flex justify-content-center">
          <div style="width: 80%">
            <div>
              <img
                src="{{ asset($product->image) }}"
                class="categoryImage rounded-5"
                alt="{{ $product->name }}"
              />
            </div>
            <div class="d-flex justify-content-between">
              <div>
                <h6 class="fw-bold ">{{ $product->name }}</h6>
                <h6>Rs: {{ $product->price }}</h6>
              </div>
              <div class="d-flex justify-content-center align-items-center">
                <i
                  class="bi bi-arrow-right text-secondary"
                  style="font-size: 30px"
                ></i>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </section>

  @include('user.footer')
</body>

</html>
