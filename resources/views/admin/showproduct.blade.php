

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
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session('message'))
                <div class="alert alert-sucess">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
              {{session()->get('message')}}
                </div>
             @endif
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Discount Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->title }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>
                                        @if ($product->image)
                                            <img src="{{ asset('product_images/' . $product->image) }}" alt="Product Image" style="width: 50px; height: 50px;">
                                        @else
                                            No image
                                        @endif
                                    </td>
                                    <td>{{ $product->category }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount_price }}</td>
                                    <td>
                                        <button class="btn btn-success"><a href="{{url('edit_product', $product->id)}}">Edit</a></button>
                                    </td>
                                    <td>
                                        <button onclick="return confirm('Are you sure to delete the product?')" class="btn btn-danger"><a   href="{{url('delete_product', $product->id)}}">Delete</a></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>

