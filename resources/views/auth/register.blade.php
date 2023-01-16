@include('utils/head')

<section class="register">
    <div class="container w-screen h-screen">
        <div class="row justify-center align-items-center h-screen">
            <form action="/users" method="post" class="border bg-yellow-50 shadow-xl p-6 rounded">
                @csrf
                <div class="form_title w:100">
                    <h4>Register Here:</h4>
                </div>
                <div class="form-group flex-col">
                    <label for="Fname">First Name :</label>
                    <input type="text" name="fname" value="{{ old('fname') }}" class="form-input" placeholder="Enter Your First Name" required>

                    @error('fname')
                        <p class="" style="font-size: 16px;color:red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Lname">Last Name :</label>
                    <input type="text" name="lname" value="{{ old('lname') }}" class="form-input" placeholder="Enter Your Last Name" required>
                    
                    @error('lname')
                        <p class="" style="font-size: 16px;color:red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" name="uname" value="{{ old('uname') }}" class="form-input" placeholder="Enter Your user Name" required>

                    @error('uname')
                        <p class="" style="font-size: 16px;color:red;">{{ $message }}</p>
                    @enderror
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
                <div class="form-group">
                    <label for="confirmpassword">Confirm Password :</label>
                    <input type="password" name="password_confirmation" value="" class="form-input" placeholder="Confirm Your Password" required>

                    @error('password_confirmation')
                        <p class="" style="font-size: 16px;color:red;">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group pt-2">
                    <button type="submit" class="btn btn-group-lg bg-green-700 text-center text-white">Register</button>
                    <p class="mt-3">Have an account? <a href="/login">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</section>