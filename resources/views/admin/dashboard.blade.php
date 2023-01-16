@include('utils.head')
{{-- @include('header.header'); --}}
<div class="dash_section h-screen flex flex-row">
    <div class="side_bar w-80">
        <ul>
            <li><a href="http://">
                <span class="icon"></span>                
                <span class="title logo">Honey</span>
                </a>
            </li>
            <li><a href="http://">
                <span class="icon"><i class="fas fa-server"></i></span>                
                <span class="title">Dashboard</span>
                </a>
            </li>
            <li><a href="http://">
                <span class="icon"><i class="fas fa-server"></i></span>                
                <span class="title">Orders</span>
                </a>
            </li>
            <li><a href="http://">
                <span class="icon"><i class="fas fa-server"></i></span>                
                <span class="title">Customers</span>
                </a>
            </li>
            <li><a href="http://">
                <span class="icon"><i class="fas fa-server"></i></span>                
                <span class="title">Events</span>
                </a>
            </li>
            <li><a href="http://">
                <span class="icon"><i class="fas fa-server"></i></span>                
                <span class="title">View</span>
                </a>
            </li>
            <li><a href="http://">
                <span class="icon"><i class="fas fa-server"></i></span>                
                <span class="title">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="main w-full">
        <x-card class="topbar mb-5 flex justify-between px-10">
            <div class="toggler">
                <button type="button" class="btn btn-block">Close</button>
            </div>
            <div class="user">
                <img src="{{ asset('asset/images/user/perso1.jpg') }}" alt="user" class=" rounded-full">
                <ul class=" sub_profile">
                    <li><a href="">Profile</a></li>
                    <li><a href="">Edit</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </div>
        </x-card>
        {{-- cards --}}
        <div class="cardbox  relative p-5 grid">
            <x-card class="card">
                <div>
                    <div class="numbers">1000</div>
                    <div class="cardName">Sales</div>
                </div>
            </x-card>
            <x-card class="card">
                <div>
                    <div class="numbers">1000</div>
                    <div class="cardName">Sales</div>
                </div>
            </x-card>
            <x-card class="card">
                <div>
                    <div class="numbers">1000</div>
                    <div class="cardName">Sales</div>
                </div>
            </x-card>
            <x-card class="card">
                <div>
                    <div class="numbers">1000</div>
                    <div class="cardName">Sales</div>
                </div>
            </x-card>
        </div>
        <div class="items_view">
            <div class="table_name whitespace-wrap flex mb-4 justify-between">
                <h4>Total Items</h4>
                <a href="{{ '../products/create' }}" class=" btn btn-danger">Add Item</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>Title</td>
                        <td>Description</td>
                        <td>image</td>
                        <td>price</td>
                        <td>Quantity</td>
                        <td>Action</td>

                    </tr>
                </thead>
                <tbody>
                    @unless(count($products) == 0)
                        @foreach($products as $product){
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td>{{ $product->body }}</td>
                                <td><img src="{{ $product->image ? asset('storage/' . $product->image) : asset('/asset/images/peanutbutter.jpg') }}" alt=""></td>
                                <td>Ksh: {{ $product->price }}</td>
                                <td>{{ $product->quantity }} Grams</td>
                                <td>
                                    <a href="/products/{{ $product->id }}/edit" type="submit" class="btn  btn-success">Edit</a>
                                    <form action="/products/{{ $product->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="a btn-danger">Delete</button>
                                    </form>
                                    
                                </td>
                            </tr>
                        }
                        @endforeach
                    @endunless
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- @include('footer.footer') --}}