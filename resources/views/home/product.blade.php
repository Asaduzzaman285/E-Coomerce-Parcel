<section class="product_section layout_padding" id="products">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Our <span>products</span>
            </h2>
        </div>
        <div class="row">
            @foreach ($product as $item)
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="box">
                        <div class="option_container">
                            <div class="options">
                                <a href="{{ route('details_product', $item->id) }}" class="option1">
                                    Details
                                </a>
                              <form action="{{url('add_to_cart',$item->id)}}" method="post">
                                @csrf
                              <div class="options d-flex align-items-center">
                                <input type="number" value="1" name="quantity" min="1" class="quantity-input" />
                                <input type="submit" value="Add to Cart" class="option2" />
                            </div>

                            </form>



                                    {{-- Add to Cart --}}

                            </div>
                        </div>
                        <div class="img-box">
                            <img src="/product_images/{{ $item->image }}" alt="">
                        </div>
                        <div class="detail-box">
                            <h5 class="mt-4">{{ $item->title }}</h5>
                            @if ($item->discount_price != '0')
                                <div class="d-flex flex-column">
                                    <h5 style="color: red; font-size: 14px;">Discount Price</h5>
                                    <h6 style="color: red; font-size: 16px;">
                                        ${{ $item->discount_price }}
                                    </h6>
                                </div>
                                <div class="d-flex flex-column">
                                    <h5 style="text-decoration: line-through; color: blue; font-size: 14px;">Price</h5>
                                    <h6 style="text-decoration: line-through; color: blue; font-size: 16px;">
                                        ${{ $item->price }}
                                    </h6>
                                </div>
                            @else
                                <div class="d-flex flex-column">
                                    <h5 style="color: blue; font-size: 14px;">Price</h5>
                                    <h6 style="color: blue; font-size: 16px;">
                                        ${{ $item->price }}
                                    </h6>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-4">
            {{ $product->onEachSide(1)->links('pagination::bootstrap-4') }}
        </div>
    </div>
</section>
