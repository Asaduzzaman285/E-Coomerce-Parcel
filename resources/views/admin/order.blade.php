<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.link')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel col-12">
          <div class="content-wrapper text-center">
            <h1 class="mb-4">All Orders</h1>

            <div class="search-box d-flex justify-content-center mb-3">
                <form action="{{ url('search') }}" method="get">
                    @csrf
                    <input type="text" class="bg-dark" name="search" placeholder="Search for something">
                    <input type="number" class="bg-dark" name="min_price" placeholder="Min Price">
                    <input type="number" class="bg-dark" name="max_price" placeholder="Max Price">
                    <input type="submit" value="Search" class="btn btn-primary">
                </form>
            </div>

            <div class="table-responsive "> <!-- Make the table responsive -->

                <table class="table table-bordered table-striped ">
                    <thead>
                      <tr>
                        <th class="col-1">Name</th>
                        <th class="col-1">Email</th>
                        <th class="col-1">Phone</th>
                        <th class="col-1">Address</th>
                        <th class="col-1">Product Title</th>
                        <th class="col-1">Price</th>
                        <th class="col-1">Quantity</th>
                        <th class="col-1">Image</th>
                        <th class="col-1">Payment Status</th>
                        <th class="col-1">Delivery Status</th>
                        <th class="col-1">Delivered</th>
                        <th class="col-1">PDF</th>
                        <th class="col-1">Send Email</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)


                      <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->quantity}}</td>
                        <td><img src="/product_images/{{$order->image}}" alt="" style="height: 100px;width:100px"></td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>
                        @if ($order->delivery_status=='Processing')
                           <a onclick="return confirm('Are you sure this product is delivered?')" href="{{url('delivery',$order->id)}}" class="btn btn-primary">Delivered</a>


                        @else
                        <p >Delivered</p>

                        @endif
                        </td>
                        <td><a class="btn btn-primary" href="{{url('pdfprint',$order->id)}}">Print</a></td>
                      <td><a class="btn btn-primary" href="{{url('sendmail',$order->id)}}">Email</a> </td>
                      </tr>
                      @endforeach
                      <!-- Add more rows as needed -->
                    </tbody>
                  </table>

            </div>
          </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
