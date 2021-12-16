<!-- Login Modal-->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary p-4">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Login</h5>
                <button class="btn-close btn-close-white" type="button"
                        data-bs-dismiss = "modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">

                <form method="post">
                    <!-- Username -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               name="txt_username_email"
                               class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>">
                        <label>Username</label>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-3">
                        <input type="password"
                               name="txt_password"
                               class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                        <label>Password</label>
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>

                    <!-- Forgot Password -->
                    <div class="form-floating mb-3">
                        <p class="float mt-3"><a href="#" data-bs-toggle="modal" data-bs-target="#signupModal"
                                                 style="text-decoration: none">Forgot Password?</a></p>
                    </div>

                    <!-- Submit -->
                    <div class="d-grid">
                        <input type="submit" name="btn_login" class="btn btn-primary rounded-pill" value="SIGN IN" onclick="$('#loginModal').modal({'backdrop': 'static'});">
                    </div>

                    <!-- Register -->
                    <div class="form-floating mb-3">
                        <p class="float-center mt-3">Don't have an account? <a href="#" data-bs-toggle="modal"
                                                                               data-bs-target="#signupModal"
                                                                               style="text-decoration: none">SIGN UP</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Sign up Modal-->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary p-4">
                <h5 class="modal-title font-alt text-white" id="signupModalLabel">Sign up</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <!-- Username input-->
                    <div class="form-floating mb-3">
                        <input type="text" name="username"
                               class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $username; ?>">
                        <label for="user">Username</label>
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>

                    <!-- Password input-->
                    <div class="form-floating mb-3">
                        <input type="password" name="password"
                               class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $password; ?>">
                        <label for="pass">Password</label>
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>

                    <!-- Confirm Password input-->
                    <div class="form-floating mb-3">
                        <input type="password" name="confirm_password"
                               class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $confirm_password; ?>">
                        <label for="pass">Confirm Password</label>
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                    </div>

                    <div class="d-grid">
                        <button class="btn btn-primary rounded-pill" id="registerBtn" type="submit" value="Submit">
                            REGISTER
                        </button>
                    </div>
                    <p class="float-center mt-3">Already have an account? <a href="#" data-bs-toggle="modal"
                                                                             data-bs-target="#loginModal"
                                                                             style="text-decoration: none">SIGN IN</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>