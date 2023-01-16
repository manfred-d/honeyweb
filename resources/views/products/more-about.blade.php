@include('utils.head');
@include('header.header');

<style>
    .item_info p{
        font-size: 16px;
        color: gray;
    }
    .item_info h5{
        font-size: 20px;
        font-weight: 600;
        color: #ffffff;
    }
    .item_info strong{
        color: rgba(42, 215, 42, 0.935);
        font-size: 18px
    }
    li{
        color: rgba(255, 255, 255, 0.95);
        padding: 2px 0;
        font-size: 16px;
        list-style:inside;
    }
</style>

<section>
    <div class="container">
        <x-card class=" lg:w-full md:w-1/2 mx-auto">
            <div class="shop_more flex justify-between lg:flex-row flex-col">
                <img src="{{ asset('asset/images/beeswax.png') }}" alt="bees wax" class="w-full h-full m-0">
                <div class="item_info bg-gray-700 w-full p-4">
                    <p>{{ $product->body }}</p>
                    <h5>{{ $product->title }}</h5>
                    <strong>Ksh: {{ $product->price }}</strong>
                    <h6 class=" text-lg text-yellow-50">Grams: {{ $product->quantity }}</h6>
                </div>
                <div class="more_info justify-start bg-red-600 p-4 w-full">
                    <div class="uses">
                        <h4 class=" text-black text-lg font-medium underline">Uses of Bees wax</h4>
                        <div class="use pl-4 tooltip">
                            <ol>
                                <li>Use to make wax</li> 
                                <li>Used to make medicinal products</li> 
                                 
                            </ol>
                        </div>
                    </div>
                    <div class="Benefits">
                        <h4 class=" text-black text-lg font-medium underline">Benefits of Bees wax</h4>
                        <div class="benefit pl-4 tooltip">
                            <ol>
                                <li>Health Benefits for healthy body</li> 
                                <li>Health Benefits for healthy body</li> 
                                <li>Health Benefits for healthy body</li> 
                                <li>Health Benefits for healthy body</li>  
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</section>