<?= $this->extend('template'); ?>

<?= $this->section('MyContent'); ?>

<br>
<h2 class="mb-5">Browse Produk Urut Harga Beli (NIM GENAP)</h2>
<?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('message'); ?>
    </div>
<?php endif; ?>

<a class="btn btn-primary mb-3" href="/BrowseProduk/create" role="button">Create</a>


<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Product Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Product Group</th>
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
                    <td><?= $r["kategorigroupproduk"]; ?></td>
                    <td><?= $r["hargabeliproduk"]; ?></td>
                    <td><a class="btn btn-warning" href="/BrowseProduk/edit/<?= $r["id"]; ?>" role="button">Edit</a>
                        &nbsp;&nbsp; <a class="btn btn-danger" href="/BrowseProduk/delete/<?= $r["id"]; ?>" role="button">Delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>