<?= $this->extend('static/base'); ?>
<?= $this->Section('content'); ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <?= form_open_multipart();?>
                <div class="card">
                    <div class="card-header text-center">
                        <h3>File Upload</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="" class="col-for-label col-md-3">Image</label>
                            <div class="col-md-9 ">
                                <input type="file" name="image" class="form-control  file" accept="image/*">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-for-label col-md-3"></label>
                            <div class="col-md-9">
                                <input class="btn btn-outline-success" type="submit" value="Submit" name="btn">
                            </div>
                        </div>

                    </div>
                </div>
                <?= form_close();?>
                <?php if(isset($errors)) : ?>
                        <span><?= $errors->listErrors(); ?></span>
                <?php endif; ?>
                <div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>