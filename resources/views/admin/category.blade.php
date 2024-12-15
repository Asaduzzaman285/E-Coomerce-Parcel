

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
              <div class="d-flex justify-content-center align-items-center" >
                <div class="text-center p-5 bg-light shadow-lg rounded">
                  <h1 class="text-dark">Add Category</h1>
                  <form action="{{url('add_category')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                      <input type="text" class="form-control text-light" name="name"  placeholder="Write The Category"  >

                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                  </form>
                </div>

              </div>
              <div class="d-flex justify-content-center align-items-center gap-2 mt-4">
                <table class="table table-bordered w-50">
                  <thead>
                    <tr>
                      <th class="px-3">Category Name</th>
                      <th class="px-3">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $data)


                    <tr>
                      <td class="px-3">{{$data->category_name}}</td>
                      <td class="px-3">
                        <a class="btn btn-danger" onclick="return confirm('Are you sure to delete the category?')" href="{{url('delete_category',$data->id)}}">Delete</a>
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

