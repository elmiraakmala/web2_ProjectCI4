<?= $this->extend('Users/LayoutAccount'); ?>

<?= $this->section('MyContent'); ?>

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <?php if (session()->getFlashdata('message')) : ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('message'); ?>
                                </div>
                            <?php endif; ?>
                            <form action="/user/login" method="post" class="user">
                                <?= csrf_field(); ?>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="username" placeholder="Enter Username...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button>
                                <br>
                                <hr>
                                <a href="/user/register" class="btn btn-google btn-user btn-block">
                                    <i class="fas fa-user"></i> Create An Account
                                </a>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?= $this->endSection(); ?>