<?php
include './navbar.php';
?>

<div class="container-fluid text-center d-flex align-items-center flex-column flex-md-row flex-lg-row">
        <div class="ima">
            <img src="./imgs/Sign up-rafiki.svg" alt="">
        </div>
        <div class="section">
            <h1>Create Your Account</h1>
            <div class="btn-F d-flex my-3 flex-column flex-md-row flex-lg-row justify-content-md-between justify-content-lg-between">
                <a class="my-3 m-md-0 m-lg-0 w-md-25 w-lg-25" href="#">Sign Up with Google</a>
                <a class="" href="#">With facbook</a>
            </div>
            <span class="line"></span>
            <p class="text-start">Or sign up your email adress</p>
            <form>
                <div class="section-two text-start ">
                    <div class="section-three d-md-flex d-lg-flex justify-content-md-between justify-content-lg-between">
                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example3">Name</label>
                            <input type="text" id="form6Example3" class="form-control" />
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example4">User Name</label>
                            <input type="text" id="form6Example4" class="form-control" />
                        </div>
                    </div>
                    <div class="section-three d-md-flex d-lg-flex justify-content-md-between justify-content-lg-between">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example5">Your Email</label>
                            <input type="email" id="form6Example5" class="form-control" />
                        </div>

                        <!-- password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example6">Password</label>
                            <input type="password" id="form6Example6" class="form-control" />
                        </div>
                    </div>
                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                        <label class="form-check-label" for="form6Example8"> I accept the Terms and Conditions </label>
                    </div>
                </div>
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
            </form>
        </div>
    </div>
</div>