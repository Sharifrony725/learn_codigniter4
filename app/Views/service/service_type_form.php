<?php $pages = session(); ?>
<?= $this->extend('static/base'); ?>
<?= $this->Section('content'); ?>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card ">
            <div class="card-header py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fs-17 font-weight-600 mb-0">Add Service Type</h6>
                    </div>
                    <div class="text-right">
                        <a href="#" class="btn btn-success btn-sm mr-1"><i class="fas fa-align-justify mr-1"></i>Service List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="text-center">
                    <?php if ($pages->getTempdata('success')) : ?>
                        <div class="btn btn-success  btn-sm mb-2">
                            <?= $pages->getTempdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($pages->getTempdata('failed')) : ?>
                        <div class="btn btn-success btn-sm text-center">
                            <?= $pages->getTempdata('failed'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="row">
                    <?php echo form_open(); ?>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 col-form-label">Service Type Name<i class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Service type name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="form-group row">
                            <label class="col-sm-4"></label>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success form-control" name="btn">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>