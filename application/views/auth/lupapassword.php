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
                                    <h1 class="h4 text-gray-900 mb-4"><b>Lupa Password</b></h1>
                                </div>
                                <?php echo $this->session->flashdata('message'); ?>
                                <form class="user" method="post" action="<?php echo base_url('auth/lupapassword'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?php echo set_value('email'); ?>">
                                        <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block mt-4">
                                        Reset Password
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?php echo base_url('auth');  ?>">Kembali ke Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>