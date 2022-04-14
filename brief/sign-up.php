<?php
include './navbar.php';
?>

<div class="container-fluid text-center my-2 d-flex align-items-center flex-column flex-md-row flex-lg-row">
    <div class="ima">
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
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" id="name" class="form-control" />
                        <!-- validated -->
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>                        <small>Error message</small>
                        <!-- validated -->
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">User Name</label>
                        <input type="text" id="name" class="form-control" />
                        <!-- validated -->
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>                        <small>Error message</small>
                        <!-- validated -->
                    </div>
                </div>
                <div class="section-three d-md-flex d-lg-flex justify-content-md-between justify-content-lg-between">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Your Email</label>
                        <input type="email" id="email" class="form-control" />
                        <!-- validated -->
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>                        <small>Error message</small>
                        <!-- validated -->
                    </div>

                    <!-- password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="paswword">Password</label>
                        <input type="password" id="paswword" class="form-control" />
                        <!-- validated -->
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>                        <small>Error message</small>
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
                <a href="./sign-in.php" class=" btn btn-primary btn-block mb-4">Sign Up</a>
            </div>
        </form>
    </div>
</div>
</div>