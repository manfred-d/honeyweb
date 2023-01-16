
    <nav>
        <div class="navbar">
            <div class="logo">
                <a href="#"><h4>Honey.</h4></a>
            </div>
            <ul class="nav-ul">
                <a href="/"><li class="nav-list">Home</li></a>
                <a href="/about"><li class="nav-list">About</li></a>
                <a href="/shop"><li class="nav-list">Products</li></a>
                <a href="/contacts"><li class="nav-list">Contacts</li></a>
                @auth
                    <div class="user-profile">
                        <span>{{ auth()->user()->fname }}</span>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="nav-list">Logout</button>
                        </form>
                    </div>
                @else
                    <a href="/login"><li class="nav-list">Sign Up</li></a>

                @endauth
     
            </ul>
        </div>
    </nav>
    <style>
        .user-profile{
            padding:0 15px;
            position: relative;
        }
        .user-profile span{
            color: #fff;
            font-size: 22px;
        }
        .user-profile form{
            display: none;
            position: absolute;
            font-size: 20px;
            color: #fff;
        }
        .user-profile:hover form{
            display: block;
        }
    </style>