@include('utils/head')

<section class="register">
    <div class="container w-screen h-screen">
        <div class="row justify-center align-items-center h-screen">
            <form action="/authenticate" method="post" class="border bg-yellow-50 shadow-xl p-6 rounded">
                @csrf
                <div class="back_home w-100 text-center mb-4">
                    <a href="/">Home</a>
                </div>
                <div class="form_title w:100">
                    <h4>Login Here:</h4>
                </div>
                <div class="form-group">
                    <label for="email">email :</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-input" placeholder="Enter Your email" required>

                    @error('email')
                        <p class="" style="font-size: 16px;color:red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="password" name="password" value="" class="form-input" placeholder="Enter your Password" required>

                    @error('password')
                        <p class="" style="font-size: 16px;color:red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group pt-2">
                    <button type="submit" class="btn btn-group-lg bg-green-700 text-center">Sign In</button>
                    <p class="mt-3">New here? <a href="/register">register here</a></p>
                </div>
            </form>
        </div>
    </div>
</section>