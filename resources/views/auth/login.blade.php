@include('utils/head')

<section class="register">
    <div class="container w-screen h-screen">
        <div class="row justify-center align-items-center h-screen">
            <form action="" method="post" class="border p-6 rounded">
                <div class="back_home w-100 text-center mb-4">
                    <a href="/">Home</a>
                </div>
                <div class="form_title w:100">
                    <h4>Login Here:</h4>
                </div>
                <div class="form-group">
                    <label for="email">email :</label>
                    <input type="email" name="email" value="" class="form-input" placeholder="Enter Your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password :</label>
                    <input type="pass" name="pass" value="" class="form-input" placeholder="Enter your Password" required>
                </div>
                <div class="form-group pt-2">
                    <button type="submit" class="btn btn-group-lg bg-green-700 text-center">Register</button>
                    <p class="mt-3">New here? <a href="/register">register here</a></p>
                </div>
            </form>
        </div>
    </div>
</section>