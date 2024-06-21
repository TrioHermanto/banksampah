<div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center my-auto">
        <div class="col-xl-10 col-lg-12 ">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0 my-auto">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900"><b>Reset Password Untuk</b></h1>
                                    <h5 class="mb-4"><?php echo $this->session->userdata('reset_email'); ?></h5>
                                </div>
                                <?php echo $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?php echo base_url('auth/ubahpassword'); ?>">
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Enter password baru ...">
                                        <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Enter lagi password baru ...">
                                        <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                                        Ganti Password
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>