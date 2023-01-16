@include('utils/head');
@include('header.header');

<section>
    
        <div class="row shadow-md justify-around bg-gray-100 h-full w-full">
            <div class="search_sec w-1/3 p-4 m-2">
                <form action="" class=" relative">
                    <input type="text" name="" id="" class=" w-full rounded-md text-base border-none outline-none p-2 h-12 full-width " placeholder="Search Items">
                    <button type="submit" class="absolute top-1/2 -right-0 text-lg transform text-white bg-gray-700 rounded-r-md h-12 w-12 -translate-y-1/2 cursor-pointer">
                        <i class="fas fa-search "></i>
                    </button>
                </form>
            </div>
            <div class="cart_sec p-4 flex align-items-center">
                <a href="/cart" class=" text-lg text-white h-14 w-14 cursor-pointer">
                    <i class="fas fa-shopping-bag text-5xl text-gray-700"></i>
                </a>
                <div class="details">
                    <p class="px-3 text-base text-gray-900">0 items</p>
                    <p class="px-3 text-base text-gray-900">0 price</p>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="shop_items grid ">
                <div class="shop_item">
                    <a href="/shop/more">
                        <img src="{{ asset('asset/images/beeswax.png') }}" alt="bees wax">
                        <div class="item_info">
                            <p>Food grade bees wax</p>
                            <h5>Bees Wax</h5>
                            <strong>Ksh 590</strong>
                        </div>
                        <a href="/add-to-cart" class="shop_cart">
                            <i class="fas fa-shopping-cart"></i>
                        </a>
                    </a>
                </div>
                <div class="shop_item">
                    <img src="{{ asset('asset/images/beeswax.png') }}" alt="bees wax">
                    <div class="item_info">
                        <p>Food grade bees wax</p>
                        <h5>Bees Wax 900g</h5>
                        <strong>Ksh 900</strong>
                    </div>
                    <a href="/cart" class="shop_cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="shop_item">
                    <img src="{{ asset('asset/images/beeswax.png') }}" alt="bees wax">
                    <div class="item_info">
                        <p>Food grade bees wax</p>
                        <h5>Bees Wax</h5>
                        <strong>Ksh 900</strong>
                    </div>
                    <a href="/cart" class="shop_cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="shop_item">
                    <img src="{{ asset('asset/images/peanutbutter.jpg') }}" alt="bees wax">
                    <div class="item_info">
                        <p>Food grade bees wax</p>
                        <h5>Bees Wax</h5>
                        <strong>Ksh 900</strong>
                    </div>
                    <a href="/cart" class="shop_cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="shop_item">
                    <img src="{{ asset('asset/images/beeswax.png') }}" alt="bees wax">
                    <div class="item_info">
                        <p>Food grade bees wax</p>
                        <h5>Bees Wax</h5>
                        <strong>Ksh 900</strong>
                    </div>
                    <a href="/cart" class="shop_cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="shop_item">
                    <img src="{{ asset('asset/images/peanutbutter.jpg') }}" alt="bees wax">
                    <div class="item_info">
                        <p>Food grade bees wax</p>
                        <h5>Bees Wax</h5>
                        <strong>Ksh 900</strong>
                    </div>
                    <a href="/cart" class="shop_cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="shop_item">
                    <img src="{{ asset('asset/images/peanutbutter.jpg') }}" alt="bees wax">
                    <div class="item_info">
                        <p>Food grade bees wax</p>
                        <h5>Bees Wax</h5>
                        <strong>Ksh 900</strong>
                    </div>
                    <a href="/cart" class="shop_cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
                <div class="shop_item">
                    <img src="{{ asset('asset/images/beeswax.png') }}" alt="bees wax">
                    <div class="item_info">
                        <p>Food grade bees wax</p>
                        <h5>Bees Wax</h5>
                        <strong>Ksh 900</strong>
                    </div>
                    <a href="/cart" class="shop_cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('footer.footer')