

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
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
                <h1>Send Email to {{$order->email}}</h1>

                <form action="{{url('send_user_email',$order->id)}}" method="POST">
                    @csrf <!-- Include CSRF token for security -->

                    <!-- Email Subject -->
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter the email subject" required>
                    </div>

                    <!-- Recipient Email -->
                    <div class="form-group">
                        <label for="recipient">Recipient Email:</label>
                        <input type="email" class="form-control" id="recipient" name="recipient" placeholder="Enter recipient's email" required>
                    </div>
                    <div class="form-group">
                        <label for="button">Email Button:</label>
                        <input type="text" class="form-control" id="recipient" name="button" placeholder="Enter button" required>
                    </div>

                    <div class="form-group">
                        <label for="url">Email url:</label>
                        <input type="text" class="form-control" id="recipient" name="url" placeholder="Enter url" required>
                    </div>

                    <!-- Email Body -->
                    <div class="form-group">
                        <label for="body">Email Body:</label>
                        <textarea class="form-control" id="body" name="body" rows="6" placeholder="Enter the email content" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary mt-3">Send Email</button>
                </form>
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

