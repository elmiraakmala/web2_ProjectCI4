<?= $this->extend('template'); ?>

<?= $this->section('MyContent'); ?>

<br>
<h2 class="mb-5">Product List</h2>
<?php if (session()->getFlashdata('message')) : ?>
<div class="alert alert-success" role="alert">
    <?= session()->getFlashdata('message'); ?>
</div>
<?php endif; ?>

<a class="btn btn-primary mb-3" href="/product/create" role="button">Create</a>


<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $no = 1;
                    foreach ($products as $r) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $r["product_name"]; ?></td>
                <td><?= $r["stock"]; ?></td>
                <td><?= $r["price"]; ?></td>
                <td><a class="btn btn-warning" href="/product/edit/<?= $r["id"]; ?>" role="button">Edit</a>
                    &nbsp;&nbsp; <a class="btn btn-danger" href="/product/delete/<?= $r["id"]; ?>"
                        role="button">Delete</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>