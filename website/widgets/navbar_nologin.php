<!-- Top Navigation Bar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm bg-white" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand fw-bold" href="<?php echo $navbar_path; ?>">codeX</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Tutorials</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Challenges</a></li>
                <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Community</a></li>
            </ul>
            <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <span class="d-flex align-items-center">
                            <span class="medium">Log in</span>
                        </span>
            </button>
        </div>
    </div>
</nav>

<!-- Login Modal-->
<div class="modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary p-4">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Login</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <!-- Username -->
                <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <label>Username</label>
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>
                <!-- Password -->
                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                    <label>Password</label>
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <!-- Forgot Password -->
                <div class="form-floating mb-3">
                    <p class="float mt-3"><a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" style="text-decoration: none">Forgot Password?</a></p>
                </div>
                <!-- Login -->
                <div class="d-grid">
                    <input type="submit" class="btn btn-primary rounded-pill" value="SIGN IN">
                </div>
                <!-- Register -->
                <div class="form-floating mb-3">
                    <p class="float-center mt-3">Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#signupModal" style="text-decoration: none">SIGN UP</a></p>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Sign up Modal-->
<div class="modal" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary p-4">
                <h5 class="modal-title font-alt text-white" id="signupModalLabel">Sign up</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form name="f1" action = "database/authentication.php" onsubmit = "return validation()" method = "POST">
                    <!-- Username input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="registerUser" name="user" type="text"/>
                        <label for="user">Username</label>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="registerPass" name="pass" type="password"/>
                        <label for="pass">Password</label>
                    </div>

                    <div class="d-grid"><button class="btn btn-primary rounded-pill" id="registerBtn" type="submit" value="Login">Register</button></div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Forgot Pass Modal -->


<!-- Reset Pass Modal -->
