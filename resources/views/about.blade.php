@include('utils.head');
@include('header.header');

<section class="about">
    <div class="container">
        <x-card class="row mb-4 ">
            <div class="title px-5 text-yellow-900 text-2xl">
                <h2 class=" font-bold">Who we are</h2>
            </div>
        </x-card>
        <x-card class="row ">
            <h2 class="p-4 font-semibold text-xl">Honey</h2>
            <p class=" text-gray-900 break-words p-4 text-lg"> Food is the leading producer of natural nutritious related food products in the East African region. Founded 20 years ago, business activities are focused on five principal product sectors – refined honey, processed peanut, food grade beewax,peanut butter and processed cashewnuts. </p>
            <div class="more_info">
                <p class="text-gray-900 break-words p-4 text-lg">Work with over 2000 peanut small holder farmers and over 5000 bee keepers in the Eastern African Region. Greenforest products are present in all retail outlets in Kenya serving all market segments of the economy. The products have also found their way into the greater EAC through distributors serving hotels and through regional restaurant chains</p>
                
            </div>
            <div class="mission">
                <h2 @class(['p-4', 'font-bold' => true])>Our Mission</h2>
                <p class="text-gray-900 break-words p-4 text-lg">To offer quality, safe, affordable and nutritious products to our clients, as well as increasing household income for our smallscale farmers and increase employment for youth and women.</p>

            </div>
            <div class="vision">
                <h2 @class(['p-4', 'font-bold' => true])>Our Vision</h2>
                <p class="text-gray-900 break-words p-4 text-lg">To offer quality, safe, affordable and nutritious products to our clients, as well as increasing household income for our smallscale farmers and increase employment for youth and women.</p>

            </div>
            <div class="Achievements">
                <h2 @class(['p-4', 'font-bold' => true])> Support for Local Farmers</h2>
                <p class="text-gray-900 break-words p-4 text-lg">We work with over 2000 peanut small holder farmers and over 5000 bee keepers in the
                    Eastern African Region. This has resulted in better living standards of these farmers and over 61 employees
                </p>
            </div>
        </x-card>
    </div>
</section>


@include('footer.footer')