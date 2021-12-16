<div class="tab-pane fade <?php echo $show_password;?>" id="change_password" role="tabpanel" aria-labelledby="profile-tab">

    <div class="mt-4">
        <h3 class="mb-2">Change Password</h3>

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
        if (isset($success_msg)){
            ?>

            <script type="text/javascript">
                $(window).on('load', function() {
                    $('#changeModal').modal('show');
                });
            </script>


            <?php
        }
        ?>

        <form method="post">
            <!-- Current Password -->
            <div class="form-group mt-3 col-3">
                <label style="font-size: 12px; color: grey">Current Password</label>
                <input type="password" name="current_password" class="form-control <?php echo (!empty($err_current_password)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $err_current_password; ?></span>
            </div>

            <!-- New Password-->
            <div class="form-group mt-3 col-3">
                <label style="font-size: 12px; color: grey">New Password</label>
                <input type="password" name="new_password" class="form-control <?php echo (!empty($err_new_password)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $err_new_password; ?></span>
            </div>

            <!-- Confirm New Password-->
            <div class="form-group mt-3 col-3">
                <label style="font-size: 12px; color: grey">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control <?php echo (!empty($err_confirm_password)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $err_confirm_password; ?></span>
            </div>

            <!-- Submit -->
            <div class="form-group mt-3">
                <input type="submit" name="btn_change" class="btn btn-primary" value="Change Password">
            </div>
        </form>
    </div>
</div>

<!-- Change Password Modal-->
<div class="modal fade" id="changeModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-success p-4 justify-content-md-center">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Change Password</h5>
                <button class="btn-close btn-close-white" type="button"
                        data-bs-dismiss = "modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- Image -->
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                <i class="bi bi-check-circle-fill" style="color:lightgreen; font-size: 128px"> </i>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center fw-bold">
                            Success!
                        </div>
                        <div class="mt-3 d-flex justify-content-center ">
                            <p>Your password has been changed</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
