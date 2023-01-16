@include('utils.head')
{{-- @include('header.header') --}}

<x-card class="p-10 lg:w-1/2 h-full rounded-lg mt-24 m-auto">
    <header class=" text-center">
        <h3 class="font-bold uppercase mb-1">Edit Item</h3>
        <p class="mb-4">Edit {{ $product->title }}</p>
    </header>
    <form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data" class="">
        @csrf
        @method('PUT')
        <div class="form-group mb-5">
            <input type="text" name="title" value="{{ $product->title }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the Title" required>
                @error('title')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="text" name="body" value="{{ $product->body }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the description max:50 words" required>
                @error('body')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="text" name="usage" value="{{$product->usage }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the uses " required>
                @error('usage')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="text" name="benefits" value="{{ $product->benefits }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the benefits max:50 words" required>
                @error('benefits')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="file" name="image" value="{{ $product->image ? asset('storage/' . $product->image) : asset('/images/no-image.png') }}"  class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Attach the image" required>
                @error('image')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="number" name="quantity" value="{{ $product->quantity }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the quantity in grams" required>
                @error('quantity')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="number" name="price" value="{{ $product->price }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the price in Ksh" required>
                @error('price')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class=" w-full mb-4 flex">
            <button type="submit" class=" border w-3/4 border-gray-200 rounded p-2 bg-gray-700 inline-block mt-3">Edit the Product</button>
            <a href="/admin/dashboard" type="reset" class=" border w-1/4 border-gray-200 rounded text-center p-2 bg-red-700 inline-block mt-3" > Cancel</a>
        </div>
    </form>
</x-card>