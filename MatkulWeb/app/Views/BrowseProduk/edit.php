<?= $this->extend('template'); ?>

<?= $this->section('MyContent'); ?>
<h1>Edit Data</h1>
<form class="mt-5" action="/BrowseProduk/update" method="post">
    <?= csrf_field(); ?>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="product_name" name="product_name" value="<?= $row['product_name']; ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $row['id']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Product Group</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="product_group" name="product_group" value="<?= $row['kategorigroupproduk']; ?>" required>
            <input type="hidden" class="form-control" id="id" name="id" value="<?= $row['id']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Stock</label>
        <div class="col-sm-10">
            <input type="int" class="form-control" id="stock" name="stock" value="<?= $row['stock']; ?>" required>
        </div>
    </div>

    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Price</label>
        <div class="col-sm-10">
            <input type="int" class="form-control" id="price" name="price" value="<?= $row['hargabeliproduk']; ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
</form>

<?= $this->endSection(); ?>