<!-- Body Registrasi -->

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Grand Master Course</b></a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registration</p>
                <!-- form registrasi -->
                <form action="<?= base_url('auth/registration') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Full name" id="name" name="name" value="<?= set_value('name'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <!-- error message ketika rules name salah -->
                    <small class="text-danger "><?= form_error('name') ?></small>
                    <div class="input-group mb-3">
                        <input type="textarea" class="form-control" placeholder="No. Handphone " id="nohp" name="nohp" value="<?= set_value('nohp'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Alamat" id="alamat" name="alamat" value="<?= set_value('alamat'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username" value="<?= set_value('username'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <!-- error message ketika rules username salah -->
                    <small class="text-danger "><?= form_error('username') ?></small>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <!-- error message ketika rules email salah -->
                    <small class="text-danger "><?= form_error('email') ?></small>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="password1" name="password1">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- error message ketika rules password salah -->
                    <small class="text-danger "><?= form_error('password1') ?></small>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Retype password" id="password2" name="password2">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <!-- submit regsitration button -->
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form>


                <!-- button ketika sudah mempuyai akun -->
                <a href="<?= base_url('auth'); ?>" class="text-center">I already Registered</a>
            </div>
            <!-- /.form-box -->
        </div>
        <!-- /.card -->
        <p class="mb-1">
            <span class="fas fa-angle-left"></span>
            <a href="<?= base_url('landing'); ?>">back</a>
        </p>
    </div>
    <!-- /.register-box -->