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
    <div class="row mb-4">
    <div class="col-12 d-flex justify-content-center">
      <form action="{{ route('user.products.search') }}" method="GET" class="d-flex" style="width: 80%">
        <input
          type="text"
          name="query"
          class="form-control"
          placeholder="Search for products..."
          aria-label="Search"
          value="{{ request()->input('query') }}"
        />
        <button type="submit" class="btn btn-primary ml-2">Search</button>
      </form>
    </div>
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
