@include('utils.head')
{{-- @include('header.header') --}}

<x-card class="p-10 lg:w-1/2 h-full rounded-lg mt-24 m-auto">
    <header class=" text-center">
        <h3 class="font-bold uppercase mb-1">Create Item</h3>
        <p class="mb-4">Create a product</p>
    </header>
    <form action="/product" method="POST" enctype="multipart/form-data" class="">
        @csrf
        <div class="form-group mb-5">
            <input type="text" name="title" value="{{ old('title') }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the Title" required>
                @error('title')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="text" name="body" value="{{ old('body') }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the description max:50 words" required>
                @error('body')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="text" name="usage" value="{{ old('usage') }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the uses " required>
                @error('usage')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="text" name="benefits" value="{{ old('benefits') }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the benefits max:50 words" required>
                @error('benefits')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="file" name="image"  class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Attach the image" required>
                @error('image')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="number" name="quantity" value="{{ old('quantity') }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the quantity in grams" required>
                @error('quantity')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class="form-group mb-5">
            <input type="number" name="price" value="{{ old('price') }}" class=" form-control border border-gray-200 rounded p-2 w-full" placeholder="Enter the price in Ksh" required>
                @error('price')
                    <p class="text-red-700 text-xs mt-1"> {{ $message }}</p>
                @enderror
        </div>
        <div class=" w-full mb-4 flex">
            <button type="submit" class=" border w-3/4 border-gray-200 rounded p-2 bg-gray-700 inline-block mt-3">Create Product</button>
            <a href="/admin/dashboard" type="reset" class=" border w-1/4 border-gray-200 rounded text-center p-2 bg-red-700 inline-block mt-3" > Cancel</a>
        </div>
    </form>
</x-card>