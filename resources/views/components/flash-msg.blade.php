@if(session()->has('message'))
    <div x-data="{show:true}" x-init="setTimeout(() =>show = false, 3000)" x-show="show" class="fixed top-0 right-2 transform -translate-x-1/2 bg-reen text-white px-3 py-3">
        <p class="">
            {{ session('message') }}
        </p>
    </div>
@endif

@if ($message = Session::get('success'))

<div class="alert alert-success alert-block fixed top-0 right-1 transform-translate-x-1/2 bg-green-700 z-20 text-white px-3 py-3">

	<button type="button" class="close p-2 text-lg text-center" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif


@if ($message = Session::get('error'))

<div class="alert alert-danger alert-block fixed top-0 right-1 transform -translate-x-1/2 bg-red-700 z-20 text-white px-3 py-3">

	<button type="button" class="close p-2 text-sm text-center" data-dismiss="alert">×</button>	

        <strong>{{ $message }}</strong>

</div>

@endif