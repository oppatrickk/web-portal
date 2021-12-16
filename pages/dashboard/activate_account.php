<div class="tab-pane fade <?php echo $show_account;?>" id="activate" role="tabpanel" aria-labelledby="activate-tab">
    <div class="mt-4 mb-4">
        <h3 class="mb-2">Verify your account</h3>
    </div>

    <?php
    if (isset($success_msg_verify)){
        $_SESSION["activate_account"] = 0;

        ?>
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#verifyModal').modal('show');
            });

            $(document).ready(function () {
                setTimeout(function () {
                    window.location.href = 'settings.php';
                }, 3000);

            });
        </script>
        <?php
    }
    ?>

    <form method = "post">
        <!-- Resend -->
        <?php
        if (isset($success_resent)){
            ?>
            <div class = "alert alert-success">
                <?php echo $success_resent; ?>
            </div>
            <?php
        }
        else{
            ?>
            <p class="mt-4">We have sent a confirmation code to <strong><?php echo $_SESSION["email"]; ?></strong></p>
        <?php }?>

        <div class="mt-2 text-primary">
            <input type="submit" name="btn_resend" class="btn btn-link" style="margin-left: -12px; text-decoration: none" value="Resend confirmation code">
        </div>

        <!-- Confirm -->
        <div class="form-group mt-3 col-2">
            <label style="font-size: 12px; color: grey">Confirmation code</label>
            <input type="text" name="confirm_code" class="form-control <?php echo (!empty($err_confirm_code)) ? 'is-invalid' : ''; ?>" style="border-radius: 16px">
            <span class="invalid-feedback"><?php echo $err_confirm_code; ?></span>
        </div>

        <!-- Submit -->
        <div class="form-group mt-3">
            <input type="submit" name="btn_verify" class="btn btn-primary" value="Verify">
        </div>

    </form>
</div>


<!-- Verified Modal-->
<div class="modal fade" id="verifyModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-success p-4 justify-content-md-center">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Account Verification</h5>
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
                            <p>Your account is now verified</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>