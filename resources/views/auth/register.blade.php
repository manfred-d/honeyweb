@include('utils/head')

<section class="register">
    <div class="container w-screen h-screen">
        <div class="row justify-center align-items-center h-screen">
            <form action="" method="post" class="border p-6 rounded">
                <div class="form_title w:100">
                    <h4>Register Here:</h4>
                </div>
                <div class="form-group flex-col">
                    <label for="Fname">First Name :</label>
                    <input type="text" name="fname" value="" class="form-input" placeholder="Enter Your First Name" required>
                </div>
                <div class="form-group">
                    <label for="Lname">Last Name :</label>
                    <input type="text" name="lname" value="" class="form-input" placeholder="Enter Your Last Name" required>
                </div>
                <div class="form-group">
                    <label for="username">Username :</label>
                    <input type="text" name="uname" value="" class="form-input" placeholder="Enter Your user Name" required>
                </div>
                <div class="form-group">
                    <label for="email">email :</label>
                    <input type="email" name="email" value="" class="form-input" placeholder="Enter Your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="pass" name="pass" value="" class="form-input" placeholder="Enter your Password" required>
                </div>
                <div class="form-group">
                    <label for="confirmpassword">Confirm Password :</label>
                    <input type="pass" name="confirmpass" value="" class="form-input" placeholder="Confirm Your Password" required>
                </div>
                <div class="form-group pt-2">
                    <button type="submit" class="btn btn-group-lg bg-green-700 text-center text-white">Register</button>
                    <p class="mt-3">Have an account? <a href="/login">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</section>