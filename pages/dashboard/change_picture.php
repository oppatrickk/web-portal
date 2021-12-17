<div class="col">
    <h3 class="mb-5">Change Picture</h3>
    <div class="row">
        <div class="col-md-auto">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto mt-4">
                                <?php
                                // Database
                                use google\appengine\api\cloud_storage\CloudStorageTools;

                                $bucket = 'codex-bu.appspot.com'; // your bucket name
                                $image = $_SESSION["profile_picture"];

                                $image_file = "gs://" . $bucket . "/" . $image;
                                $image_url = CloudStorageTools::getImageServingUrl($image_file);
                                ?>

                                <img src="<?php echo $image_url; ?>" style="height: 128px; width: 128px" class="rounded-circle" alt="" />

                                <?php
                                if (isset($success_msg)){
                                    ?>
                                    <script>
                                        $(document).ready(function () {
                                            setTimeout(function () {
                                                window.location.href = 'settings.php';
                                            }, 10000);

                                        });
                                    </script>

                                    <?php
                                }
                                ?>

                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>
                    </div>

                    <button class="btn mt-3" data-bs-toggle="modal" data-bs-target="#pictureModal" style = "text-decoration: none">
                        <i class="bi bi-camera-fill"> Change Profile Picture</i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Picture Modal-->
<div class="modal fade" id="pictureModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-primary p-4">
                <h5 class="modal-title font-alt text-white" id="loginModalLabel">Change Picture</h5>
                <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body border-0 p-4">
                <form method="post" enctype="multipart/form-data">
                    <!-- Image -->
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <div class="col col-lg-2">
                            </div>
                            <div class="col-md-auto">
                                <img id="frame" src="../../assets/img/avatars/default_avatar.png" class="img-fluid rounded-circle mb-4" style="height: 12rem; width: 12rem;"/>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>
                    </div>
                    <!-- Upload File -->
                    <div class="container">
                        <div>
                            <input name="userfile" class="form-control" type="file" id="formFile" onchange="preview()">
                            <div class="d-grid mt-3">
                                <input type="submit" class="btn btn-primary rounded-pill" name="submit" value="Upload">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>