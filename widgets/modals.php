<!-- Login Modal-->
<div class="modal fade bd-example-modal-lg" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg col-sm h-100">

        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header bg-primary p-4">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel"></h5>
                <button class="btn-close btn-close-white" type="button"
                        data-bs-dismiss = "modal"
                        aria-label="Close">

                </button>
            </div>
            <!-- Body -->
            <div class="modal-body border-1">
                <div class="row p-5" style="height: 500px">
                    <div class="col p-1 m-3" style="margin: auto">
                        <img src="<?php echo $logo_path; ?>" class="img-fluid">
                    </div>
                    <div class="col-6 p-3 m-3" style="margin: auto">
                        <form method="post">
                            <h2 class=" text-heading">LOG IN TO YOUR ACCOUNT</h2>

                            <!-- Username -->
                            <div class="form-floating mb-3">
                                <input type="text"
                                       name="txt_username_email"
                                       class="form-control <?php echo (!empty($login_username_err)) ? 'is-invalid' : ''; ?>">
                                <label>Username</label>
                                <span class="invalid-feedback"><?php echo $login_username_err; ?></span>
                            </div>

                            <!-- Password -->
                            <div class="form-floating mb-3">
                                <input type="password"
                                       name="txt_password"
                                       class="form-control <?php echo (!empty($login_password_err)) ? 'is-invalid' : ''; ?>">
                                <label>Password</label>
                                <span class="invalid-feedback"><?php echo $login_password_err; ?></span>
                            </div>

                            <!-- Forgot Password -->
                            <div class="form-floating mb-3">
                                <p class="float mt-3"><a href="#" data-bs-toggle="modal" data-bs-target="#forgotModal"
                                                         style="text-decoration: none">Forgot Password?</a></p>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <input type="submit" name="btn_login" class="btn btn-primary rounded-pill" value="SIGN IN" onclick="$('#loginModal').modal({'backdrop': 'static'});">
                            </div>

                            <!-- Register -->
                            <div class="form-floating mb-3">
                                <p class="float-center mt-3">Don't have an account? <a href="#" data-bs-toggle="modal"
                                                                                       data-bs-target="#registerModal"
                                                                                       style="text-decoration: none">SIGN UP</a>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sign up Modal-->
<div class="modal fade bd-example-modal-lg" id="registerModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg col-sm h-100">
        <div class="modal-content">
            <!-- Header -->
            <div class="modal-header bg-primary p-4">
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <!-- Content -->
            <div class="modal-body border-1">
                <div class="row p-1" style="height: 700px">
                    <div class="col p-1 m-3" style="margin: auto">
                        <img src="<?php echo $logo_path; ?>" class="img-fluid">
                    </div>
                    <div class="col-6 p-3 m-3" style="margin: auto;">
                        <form method="post">
                            <h1 class=" text-heading">SIGN UP</h1>
                            <!-- Info -->
                            <div class="form-floating">
                                <div class="row"">
                                    <!-- First Name -->
                                    <div class="col form-floating mb-3">
                                        <input type="text" name="first_name"
                                               class="form-control <?php echo (!empty($first_name_err)) ? 'is-invalid' : ''; ?>"
                                               value="<?php echo $first_name; ?>">
                                        <label for="user" style="margin-left: 12px">First Name</label>
                                        <span class="invalid-feedback"><?php echo $first_name_err; ?></span>
                                    </div>
                                    <!-- Last Name -->
                                    <div class="col form-floating mb-3">
                                        <input type="text" name="last_name"
                                               class="form-control form-control-sm <?php echo (!empty($last_name_err)) ? 'is-invalid' : ''; ?>"
                                               value="<?php echo $last_name; ?>">
                                        <label for="user" style="margin-left: 12px">Last Name</label>
                                        <span class="invalid-feedback"><?php echo $last_name_err; ?></span>
                                    </div>
                                </div>
                            </div>

                            <!-- Username Input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="name"
                                       class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                                       value="<?php echo $username; ?>">
                                <label for="user">Username</label>
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                            </div>

                            <!-- Email Input -->
                            <div class="form-floating mb-3">
                                <input type="email" name="email"
                                       class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>"
                                       value="<?php echo $email; ?>">
                                <label for="user">Email</label>
                                <span class="invalid-feedback"><?php echo $email_err; ?></span>
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
                                <input class="btn btn-primary rounded-pill" name="btn_register" id="btn_register" type="submit" value="Register" onclick="$('#registerModal').modal({'backdrop': 'static'});">
                            </div>
                            <p class="float-center mt-3">Already have an account? <a href="#" data-bs-toggle="modal"
                                                                                     data-bs-target="#loginModal"
                                                                                     style="text-decoration: none">Sign In</a>
                            </p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Recover Modal-->
<div class="modal fade bd-example-modal-lg " id="forgotModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content" style="height: 500px">
            <div class="modal-header bg-primary p-4">

                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4" style="margin: auto">
                <div class="row">
                    <div class="col">
                        <div class="col p-1 m-3"">
                            <img src="<?php echo $logo_path; ?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="col p-5" style="margin: auto">
                        <form method="post">
                            <h2 class=" text-heading">RECOVER YOUR PASSWORD</h2>

                            <?php
                            if(isset($errorMsg)){
                                foreach($errorMsg as $error){
                                    ?>
                                    <div class = "alert alert-danger">
                                        <?php echo $error; ?>
                                    </div>
                                    <?php
                                }
                            }
                            if (isset($successMsg)){
                                ?>
                                <div class = "alert alert-success">
                                    <strong><?php echo $successMsg; ?></strong>
                                </div>
                                <?php
                            }
                            ?>

                            <!-- Username Input -->
                            <div class="form-floating mb-3">
                                <input type="text" name="txt_username_email"
                                       class="form-control <?php echo (!empty($errorMsg)) ? 'is-invalid' : ''; ?>">
                                <label for="user">Username/Email</label>
                                <span class="invalid-feedback"><?php echo $errorMsg; ?></span>
                            </div>

                            <!-- Submit -->
                            <div class="d-grid">
                                <input class="btn btn-primary rounded-pill" name="btn_recover" id="btn_recover" type="submit" value="Recover">
                            </div>

                            <!-- -->
                            <p class="float-center mt-3">Already have an account? <a href="#" data-bs-toggle="modal"
                                                                                     data-bs-target="#loginModal"
                                                                                     style="text-decoration: none">Sign In</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>