<div class="col">
    <h3 class="mb-2">Edit Information</h3>
    <form method="post">
        <!-- Username -->
        <div class="form-group mt-4 col-6">
            <label style="font-size: 12px; color: grey">Username</label>
            <input disabled type="text" name="edit_username" class="form-control"
                   value="<?php echo $_SESSION["username"]?>">
        </div>

        <!-- First Name-->
        <div class="form-group mt-4 col-6">
            <label style="font-size: 12px; color: grey">First Name</label>
            <input type="text" name="edit_first_name" class="form-control <?php echo (!empty($err_edit_first_name)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $_SESSION["first_name"]?>">
        </div>

        <!-- Last Name-->
        <div class="form-group mt-4 col-6">
            <label style="font-size: 12px; color: grey">Last Name</label>
            <input type="text" name="edit_last_name" class="form-control <?php echo (!empty($err_edit_last_name)) ? 'is-invalid' : ''; ?>"
                   value="<?php echo $_SESSION["last_name"]?>">
        </div>

        <!-- Submit -->
        <div class="form-group mt-3">
            <input type="submit" name="btn_edit" class="btn btn-primary" value="Save">
        </div>
    </form>

    <?php
    if (isset($success_edit)){
        ?>
        <div class = "mt-5 col-6 alert alert-success">
            <strong><?php echo $success_edit; ?></strong>
        </div>

        <script>
            $(document).ready(function () {
                setTimeout(function () {
                    window.location.href = 'settings.php';
                }, 1000);

            });
        </script>

        <?php
    }
    ?>

</div>