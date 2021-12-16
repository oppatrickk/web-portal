<script type="text/javascript">
    $(window).on('load', function() {
        $('#verificationModal').modal('show');
    });

    $(document).ready(function () {
        setTimeout(function () {
            window.location.href = <?php $settings_path?>;
        }, 3000);

    });

</script>
<!-- Verified Modal-->
<div class="modal fade" id="verificationModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-dialog-centered col-sm">
        <div class="modal-content">
            <div class="modal-header bg-warning p-4 justify-content-md-center">
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
                                <i class="bi bi-question-circle-fill text-warning" style=" font-size: 128px"> </i>
                            </div>
                            <div class="col col-lg-2">
                            </div>
                        </div>

                        <div class="d-flex justify-content-center fw-bold">
                            Verify your account first!
                        </div>
                        <div class="mt-3 d-flex justify-content-center ">
                            <p>Redirecting to settings...</p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>