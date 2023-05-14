<?= $this->extend('templateWithoutNav'); ?>

<?= $this->section('MyContent'); ?>

<h1 class="mt-5">
    Register
</h1>
<form class="mt-5" action="/user/save" method="post">
    <?= csrf_field(); ?>

    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label"> Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="username" name="username" autocomplete="off" required>
        </div>
    </div>


    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" autocomplete="off" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col text-center">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>