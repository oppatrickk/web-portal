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
            <div class = "alert alert-success">
                <strong><?php echo $success_msg; ?></strong>
            </div>
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