@include('utils.head')
@include('header/header')
<section class="home">
    <div class="container">
        <div class="row">
            <div class="part1 align-items-center">
                <h3>Your best Honey from the best Hives.</h3>
                <p>healthy living proudly brought to you by pure sweet and clean honey from us.</p>
                <div class="home-button d-inline-block">
                    <button type="submit" class="btn btn-outline-secondary hover:shadow-inner bord">Get one today</button>
                </div>
            </div>
            <div class="part2">
                <div class="img-box">
                    <img src="{{ asset('asset/images/honey-Kenya.jpg') }}" alt="" sizes="" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recommended">
    <div class="container">
        <div class="row sm:w-100 p-2">
            <h4 class="">Recommended</h4>
        </div>
        <div class="row pt-2">
            <div class="cards">
                {{-- card box --}}
                @unless (count($products) == 0)
                    @foreach ($products as $product)
                        <div class="card-box">
                            <div class="card-img">
                                <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('asset/images/peanutbutter.jpg') }}" alt="honey">
                            </div>
                            <!-- {{ $product->image ? asset('storage/' . $product->image) : asset('/images/no-image.png') }} -->
                            <div class="card-info">
                                <div class="card-intro">
                                    <h5>{{ $product->title }}</h5>
                                    <span>Ksh: {{ $product->price }}</span>
                                </div>
                                <div class="card-body">
                                    <p>{{ $product->body }}</p>
                                    <a href="shop/more/{{ $product->id }}" type="submit" class="btn btn-primary">View More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endunless
                
            </div>
        </div>
    </div>
</section>
@include('footer.footer')