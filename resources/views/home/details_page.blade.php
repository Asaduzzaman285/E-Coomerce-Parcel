<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/public">
    @include('home.headlink')
    <style>
        /* Style for the card container */
        .product-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px 0;
        }

        /* Style for the card box */
        .box {
            display: flex;
            flex-direction: row;
            max-width: 800px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Hover effect for the card */
        .box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Image container */
        .img-box {
            width: 40%;
            overflow: hidden;
            border-radius: 10px 0 0 10px;
        }

        .img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Details container */
        .detail-box {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 60%;
        }

        /* Title and description styles */
        .detail-box h5 {
            font-size: 22px;
            color: #333;
            margin-bottom: 15px;
            transition: color 0.3s ease;
        }

        /* Hover effect for the title */
        .box:hover h5 {
            color: #ff6347;
        }

        /* Price and discount styling */
        .detail-box h6 {
            font-size: 18px;
            margin-bottom: 10px;
            transition: color 0.3s ease;
        }

        .detail-box .price {
            color: blue;
        }

        .detail-box .discount-price {
            color: rgb(107, 172, 9);
        }

        .detail-box .original-price {
            text-decoration: line-through;
            color: rgb(234, 15, 15);
        }

        /* Hover effect for prices */
        .box:hover h6 {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="hero_area">
        @include('home.header')
    {{-- </div> --}}

    <!-- Product details card -->
    <div class="product-container">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <div class="box">
                <div class="img-box">
                    <img class="p-2 " src="/product_images/{{ $product->image }}" alt="{{ $product->title }}">
                </div>
                <div class="detail-box">
                    <h5 class="text-center">{{ $product->title }}</h5>
                    <h4>Description :{{$product->description}}</h4>
                    @if ($product->discount_price != '0')
                        <div class="d-flex flex-column">
                            <h6 class="discount-price">Discount Price: ${{ $product->discount_price }}</h6>
                            <h6 class="original-price">Original Price: ${{ $product->price }}</h6>
                        </div>
                    @else
                        <h6 class="price">Price: ${{ $product->price }}</h6>
                    @endif
                   <h5>Category:{{$product->category }}</h5>
                   <h5>Available Quantity: {{$product->quantity}}</h5>
                   <form action="{{url('add_to_cart',$product->id)}}" method="post">
                    @csrf
                  <div class="options d-flex align-items-center">
                    <input type="number" value="1" name="quantity" min="1" class="quantity-input" />
                    <input type="submit" value="Add to Cart" class="option2" />
                </div>

                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer section -->
    @include('home.footer')

    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By
            <a href="https://html.design/">Free Html Templates</a><br>
            Distributed By <a href="https://themewagon.com/" target="_blank">AAAA_AAAA</a>
        </p>
    </div>

    <!-- jQuery -->
    @include('home.jslink')
</body>
</html>
