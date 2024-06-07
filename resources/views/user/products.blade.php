<!DOCTYPE html>
<html lang="en">

<head>
  @include('user.header')
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
            <input type="text" name="query" class="form-control" placeholder="Search for products..." aria-label="Search" value="{{ request()->input('query') }}" />
            <button type="submit" class="btn btn-primary ml-2">Search</button>
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
                  <div class="mb-1">
                    <div class="mb-1">
                      <label for="name" class="form-label">Name</label>
                      <input type="text" class="form-control" style="height: 30px;" id="name" name="name">
                    </div>
                    <div class="mb-1">
                      <label for="mobile" class="form-label">Mobile No.</label>
                      <input type="text" class="form-control" style="height: 30px;" id="mobile" name="mobile">
                    </div>
                    <div class="mb-1">
                      <label for="qty" class="form-label">Quantity</label>
                      <input type="text" class="form-control" style="height: 30px;" id="qty" name="qty">
                    </div>
                    <div class="mb-1">
                      <label for="image" class="form-label" style="margin-bottom: 0px;">Upload Reference image if any</label>
                      <input class="form-control border-secondary-subtle" id="image" type="file" style="background: white; margin-top:0;" name="image">
                    </div>
                    <div class="mb-1">
                      <label for="description" class="form-label">Description</label>
                      <textarea class="form-control" style="height: 80px;" id="description" name="description"></textarea>
                    </div>
                    <div class="mb-1">
                      <label for="price" style="color: #5a3b36;font-size: 35px;font-weight: bold;" class="form-label">{{$product->price}}</label>
                     
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
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
</body>

</html>
