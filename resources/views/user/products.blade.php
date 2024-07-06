<!DOCTYPE html>
<html lang="en">

<head>
  @include('user.header')
  <style>
    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 1rem;
    }

    .form-group label {
      margin-right: 10px;
      min-width: 120px;
    }

    .form-control {
      flex: 1;
      border: 1px solid #8B4513;
      height: 30px;
    }

    textarea.form-control {
      height: 80px;
    }

    .form-label.price-label {
      color: #5a3b36;
      font-size: 35px;
      font-weight: bold;
    }

    .btn-search {
      border: 1px solid #8B4513; /* Brown color */
      color: #8B4513; /* Optional: Set the text color to brown as well */
    }

    .btn-search:hover {
      background-color: #8B4513; /* Brown background on hover */
      color: #fff; /* White text on hover */
    }

    .search-btn-container {
      margin-left: 10px; /* Adjust the space as needed */
    }
  </style>
</head>

<body>
  @include('user.navigation')
  <section class="container">
    <div>
      <img src="{{asset('assets/userpage/Image/category.png')}}" alt="Category Image" style="width: 300px;" />
    </div>
    <div class="row align-items-center">
      <div class="row mb-4">
        <div class="col-12 d-flex justify-content-center">
          <form action="{{ route('user.products.search') }}" method="GET" class="d-flex" style="width: 80%">
            <input type="text" name="query" class="form-control" style="height: 35px" placeholder="Search for products..." aria-label="Search" value="{{ request()->input('query') }}" />
            <div class="search-btn-container">
              <button type="submit" class="btn btn-search" style="height: 35px">
                <i class="bi bi-search "></i>
              </button>
            </div>
          </form>
        </div>
      </div>
      @foreach($products as $product)
      @php
      $modalId = 'staticBackdrop' . $product->id;
      @endphp
      <div class="col-12 col-sm-4 py-3 d-flex flex-row justify-content-center">
        <div style="width: 80%">
          <div>
            <img src="{{ asset($product->image) }}" class="categoryImage rounded-5" alt="{{ $product->name }}" />
          </div>
          <div class="d-flex justify-content-between">
            <div>
              <h6 class="fw-bold ">{{ $product->name }}</h6>
              <h6>Rs: {{ $product->price }}</h6>
            </div>
            <div class="d-flex justify-content-center align-items-center">
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#{{ $modalId }}">
                <i class="bi bi-arrow-right text-secondary" style="font-size: 30px"></i>
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal -->
      <div class="modal fade" style="--bs-modal-width: 763px;" id="{{ $modalId }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="{{ $modalId }}Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content d-flex flex-row">
            <div class="col-7">
              <img src="{{ asset($product->image) }}" class="categoryImage" alt="{{ $product->name }}" />
            </div>
            <div class="col-5">
              <div class="modal-header" style="border-bottom:none">
                <h1 class="modal-title fs-5" style="color: #5a3b36;" id="{{ $modalId }}Label">{{ $product->name }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>{{ $product->description }}</p>
                <form action="{{ route('user.order.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="pid" id="pid" value="{{ $product->id }}">

                  <div class="form-group">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="mobile" class="form-label">Mobile No.</label>
                    <input type="text" class="form-control" id="mobile" name="mobile">
                  </div>
                  <div class="form-group">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="qty" name="qty">
                  </div>
                  <div class="form-group">
                    <label for="image" class="form-label">Ref. image if any</label>
                    <input class="form-control border-secondary-subtle" id="image" type="file" name="image">
                  </div>
                  <div class="form-group">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="price" class="form-label price-label">Rs.{{$product->price}}</label>
                  </div>

                  <div class="modal-footer">
                    <button type="submit" style="background-color: #5a3b36;color: #ced4da;" class="btn">Order Now</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  @include('user.footer')
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>
