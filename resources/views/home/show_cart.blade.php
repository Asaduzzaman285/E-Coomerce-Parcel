<!DOCTYPE html>
<html>
   <head>
     @include('home.headlink')
     <style>
         .table-wrapper {
      display: flex;
      justify-content: center;
     align-items: center;
      height: 100vh; /* Full viewport height */
   }
   table {
      border-collapse: collapse;
   }
   th, td {
      padding: 10px;
      border: 1px solid black;
   }
     </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header')
        @if (session('message'))
        <div class="alert alert-sucess">
         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
      {{session()->get('message')}}
        </div>
     @endif
        <div class="table-wrapper">
            <table class="col-md-6 text-center">
               <tr>
                  <th>Product Title</th>
                  <th>Product Quantity</th>
                  <th>Product Price</th>
                  <th>Image</th>
                  <th>Action</th>
               </tr>
              <?php
                  $totalprice=0;
             ?>
               @foreach ($cart as $cart)


               <tr>
                  <td>{{$cart->product_title}}</td>
                  <td>{{$cart->quantity}}</td>
                  <td>{{$cart->price}}</td>
                  <td>
                    <img style="height: 100px;width
                    200px" src="/product_images/{{$cart->image}}" alt="">
                  </td>
                  <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Remove?')" href="{{url('remove_product',$cart->id)}}">Remove</a></td>
               </tr>

                <?php
                $totalprice= $totalprice+$cart->price;
              ?>



               @endforeach

            </table>


         </div>
         <div class="text-center mt-3 mb-5">
            <h1>Total Price: {{$totalprice}}</h1>

            <div class="payment mt-4">
                <h2>Proceed to Order</h2>

                <!-- Flex container to align the buttons side by side -->
                <div class="d-flex justify-content-center gap-3 mt-3">
                    <!-- Cash on Delivery button -->
                    <a class="btn btn-warning" href="{{url('cash_order')}}">Cash On Delivery</a>

                    <!-- Pay Using Card button -->
                    <a class="btn btn-warning" href="{{url('stripe',$totalprice)}}">Pay Using Card</a>
                </div>
            </div>
        </div>

        @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">AAAA_AAAA</a>

         </p>
      </div>
      <!-- jQery -->
     @include('home.jslink')
   </body>
</html>
