<?php
include './navbar.php';
?>

<div class="container-fluid text-center d-flex align-items-center flex-column flex-md-row flex-lg-row">
    <div class="imag d-md-none d-lg-none w-100">
        <img src="./imgs/Computer login-rafiki.svg" alt="" srcset="">
    </div>
    <div class="container-fluid text-center d-flex align-items-center flex-column flex-md-row flex-lg-row">
        <div class="ima d-none d-md-block d-lg-block">
            <img src="./imgs/Computer login-rafiki.svg" alt="">
        </div>
        <div class="section">
            <h1 class="my-3">Sign In</h1>
            <div class="btn-F w-100 d-flex my-3 flex-column flex-md-row flex-lg-row justify-content-md-between justify-content-lg-between">
                <a class="my-3 m-md-0 m-lg-0 w-md-25 w-lg-25" href="#">Sign Up with Google</a>
                <a class="" href="#">With facbook</a>
            </div>
            <hr>
            <p class="text-start my-3">Or sign up your email adress</p>
            <form>
                <div class="section-two text-start ">
                    <div class="section-three d-md-flex d-lg-flex justify-content-md-between justify-content-lg-between">
                        <!-- Email input -->
                        <div class="form-outline mb-4 form-control">
                            <label class="form-label" for="email">Your Email</label>
                            <input type="email" id="email" class="" />
                        </div>

                        <!-- password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="" />
                        </div>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                        <label class="form-check-label" for="form6Example8"> Remember me </label>
                    </div>
                </div>
      
                <div class="btn1">
                    <a href="./profil.php" class=" btn btn-primary btn-block mb-4">Sign In</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="./main.js"></script>