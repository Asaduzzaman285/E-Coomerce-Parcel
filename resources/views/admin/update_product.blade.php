

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
 @include('admin.link')
 <style>
    .text-color {
    color: #e31d1d; /* Change this to your desired text color */
}

 </style>
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
                <div class="container mt-5 w-50">
                    <div class="text-center">
                        @if (session('message'))
                        <div class="alert alert-sucess">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                      {{session()->get('message')}}
                        </div>
                     @endif
                        <h1 class="mb-5">Product Page</h1>
                    </div>
                    <form action="{{url('update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label ">Product Title</label>
                            <input class="form-control  bg-dark text-light" value="{{$product->title}}" type="text" name="title" placeholder="Write Product Title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Description</label>
                            <input class="form-control bg-dark text-light" type="text" value="{{$product->description}}" name="description" placeholder="Write Product Description" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Price</label>
                            <input class="form-control bg-dark text-light" type="number" name="price" value="{{$product->price}}"  placeholder="Write Product Price" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label"> Discount Price</label>
                            <input class="form-control bg-dark text-light" type="number" value="{{$product->discount_price}}"  name="discount_price" placeholder="Write Discount Price">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Quantity</label>
                            <input class="form-control bg-dark text-light" type="number" value="{{$product->quantity}}" name="quantity" min="0" placeholder="Write Product Quantity" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Product Category</label>
                            <select  class="form-select bg-light text-dark" name="category"  required>


                                <option value="{{$product->category}}" selected="">{{$product->category}}</option>
                                @foreach ($category as $cat)


                                <option style="color: red;" >{{$cat->category_name}}</option>
                                {{-- value="shirt" --}}
                                @endforeach


                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label bg-dark">Current Product Image</label>
                           <img style="height: 100px;width:100px" src="/product_images/{{$product->image}}" alt="Prev Image">
                        </div>
                        <div class="mb-4">
                            <label class="form-label bg-dark">Update Product Image</label>
                            <input value="" class="form-control bg-dark text-light" type="file" name="image">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit Product</button>
                        </div>
                    </form>
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

