<?php $pages = session(); ?>

<?= $this->extend('static/base'); ?>
<?= $this->Section('content'); ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <?= form_open(); ?>
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Form Submission</h3>
                    </div>
                    <?php if ($pages->getTempdata('success')) : ?>
                        <div class="btn btn-success btn-block btn-sm text-center">
                            <?= $pages->getTempdata('success'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($pages->getTempdata('wrong')) : ?>
                        <div class="btn btn-success btn-block btn-sm text-center">
                            <?= $pages->getTempdata('wrong'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-for-label col-md-3">Name</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="name" placeholder="enter your name" value="<?= set_value('name') ?>">
                                <?php if (isset($myErrors)) : ?>
                                    <?php if ($myErrors->hasError('name')) : ?>
                                        <span class="text-danger"><?= $myErrors->getError('name'); ?></span>
                                    <?php endif;  ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-for-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" type="email" name="email" placeholder="enter your email" value="<?= set_value('email') ?>">
                                <?php if (isset($myErrors)) : ?>
                                    <?php if ($myErrors->hasError('email')) : ?>
                                        <span class="text-danger"><?= $myErrors->getError('email'); ?></span>
                                    <?php endif;  ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-for-label col-md-3">Number</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="number" placeholder="enter your number" value="<?= set_value('number') ?>">
                                <?php if (isset($myErrors)) : ?>
                                    <?php if ($myErrors->hasError('number')) : ?>
                                        <span class="text-danger"><?= $myErrors->getError('number'); ?></span>
                                    <?php endif;  ?>
                                <?php endif; ?>
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
                <?= form_close(); ?>
                <div>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>