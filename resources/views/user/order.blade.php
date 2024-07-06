<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.header')
    <style>
        .table th,
        .table td {
            background-color: transparent;
            /* Ensure table cells don't override the container background */
        }
    </style>
</head>

<body>
    @include('user.navigation')
    <div class="container rounded-5 imagShadow my-5 bgcolorCom">
        <section>
            <div class="justify-content-center align-items-center py-5">
                <div class="row mb-4">
                    <div class="col-12 d-flex justify-content-center">
                        <form action="{{ route('user.search') }}" method="GET" class="d-flex" style="width: 80%">
                            <input type="text" name="mobile" class="form-control" style="height: 35px" placeholder="Enter Mobile Number..." aria-label="Search" value="{{ request()->input('mobile') }}" />
                            <div class="search-btn-container">
                                <button type="submit" class="btn btn-search" style="height: 35px">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>

        <div class="table-container">
            <div class="table-responsive">
                <table class="table tablesorter" id="">
                    <thead class="text-primary">
                        <tr>
                            <th>SNo.</th>
                            <th>Order No.</th>
                            <th>Customer Name</th>
                            <th>Mobile</th>
                            <th>Product Name</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $counter = 1 @endphp
                        @if(isset($orders))
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $counter++ }}</td>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->customername }}</td>
                            <td>{{ $order->mobile }}</td>
                            <td>{{ $order->pname }}</td>
                            <td>{{ $order->status }}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="7">No orders found.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('user.footer')
</body>

</html>