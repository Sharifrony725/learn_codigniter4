<?= $this->extend('static/base'); ?>
<?= $this->Section('content'); ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <?php
                $session = session();
                $session->getTempdata('msg');
                if ($session->getTempdata('msg')) : ?>
                    <h1><?= $session->getTempdata('msg');  ?></h1>
                <?php endif; ?>
                <?= form_open(); ?>
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Sign Up Form</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="" class="col-for-label col-md-3">Name</label>
                            <div class="col-md-9 ">
                                <input type="text" name="name" class="form-control" placeholder="Name" value="<?= set_value('name'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-for-label col-md-3">Email</label>
                            <div class="col-md-9 ">
                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-for-label col-md-3">Mobile</label>
                            <div class="col-md-9 ">
                                <input type="number" name="mobile" class="form-control" placeholder="Mobile" value="<?= set_value('mobile'); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="" class="col-for-label col-md-3">Password</label>
                            <div class="col-md-9 ">
                                <input type="password" name="password" class="form-control" placeholder="Password" ?>
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
                <!-- <?php if (isset($errors)) : ?>
                    <span><?= $errors->listErrors(); ?></span>
                <?php endif; ?> -->
                <div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>