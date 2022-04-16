<?php
    include './navbar.php';
?>

<div class="container-fluid text-center my-2 d-flex align-items-center flex-column flex-md-row flex-lg-row">
    <div class="ima d-none d-lg-block">
        <img src="./imgs/Sign up-rafiki.svg" alt="">
    </div>
    <div class="section">
        <h1 class="my-5">Create Your Account</h1>
        <div class="btn-F d-flex my-3 flex-column flex-md-row flex-lg-row justify-content-md-between justify-content-lg-between">
            <a class="my-3 m-md-0 m-lg-0 w-md-25 w-lg-25" href="#">Sign Up with Google</a>
            <a class="" href="#">With facbook</a>
        </div>
        <span class="line"></span>
        <p class="text-start">Or sign up your email adress</p>
        <form id="form">
            <div class="section-two text-start ">
                <div class="section-three d-md-flex d-lg-flex justify-content-md-between justify-content-lg-between">
                    <!-- Text input -->
                    <div class="form-outline mb-4 form-control">
                        <label class="form-label" for="name">Name</label><br>
                        <input type="text" id="name" class="" />
                        <!-- validated -->
                        <small class="error">Error</small>
                        <!-- validated -->
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4 form-control">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="" />
                        <!-- validated -->                       
                        <small class="error">Error</small>
                        <!-- validated -->
                    </div>
                </div>
                <div class="section-three d-md-flex d-lg-flex justify-content-md-between justify-content-lg-between">
                    <!-- password input -->
                    <div class="form-outline mb-4 form-control">
                        <label class="form-label" for="paswword">Password</label>
                        <input type="password" id="password" class="" />
                        <!-- validated -->                       
                        <small class="error">Error</small>
                        <!-- validated -->
                    </div>
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <!-- password vérifier input -->
                    <div class="form-outline mb-4 form-control">
                        <label class="form-label" for="paswword-verify">Password Verify</label>
                        <input type="password" id="password-verify" class="" />
                        <!-- validated -->                       
                        <small class="error">Error</small>
                        <!-- validated -->
                    </div>
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="formulair5" checked />
                    <label class="form-check-label" for="formulair5"> I accept the Terms and Conditions </label>
                </div>
            </div>
            <!-- Submit button -->
            <div class="btn1">
                <input  name="submit" type="submit" class=" btn btn-primary btn-block mb-4" value="Sign Up">
            </div>
        </form>
    </div>
</div>
</div>


<script src="main.js"></script>
<?php
    include './footer.php';
?>