<?= $this->extend('Users/LayoutAccount'); ?>

<?= $this->section('MyContent'); ?>

<div class="card h-lg-auto w-50 mx-auto mt-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account</h1>
                    </div>
                    <form class="user" action="/user/save" method="post">
                        <?= csrf_field(); ?>


                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="username" name="username"
                                placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" name="password"
                                placeholder="Password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block">
                            Register Account
                        </button>

                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/user/index">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>