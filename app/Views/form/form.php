<?= $this->extend('static/base'); ?>
<?= $this->Section('content'); ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left mt-2">
                            <h4>Add Customer</h4>
                        </div>
                        <div class="float-right">
                            <h2 class="btn btn-success btn-sm mt-2">
                                <i class="fa fa-list"></i> Customer List
                            </h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">Customer Name <span style="color:red">*</span> : </label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="name" placeholder="Customer Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">Address :</label>
                                    <div class="col-md-8">
                                        <textarea type="text" class="form-control" name="name" placeholder="Address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">City :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">Zip :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="zip" placeholder="Zip">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">Alert Status :</label>
                                    <div class="col-md-8">
                                        <label for="">
                                            <input type="radio" name="status[]" id="" value="yes"> Yes </label>
                                        <label><input type="radio" name="status[]" id="" value="no" checked> No </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mx-auto">
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">Mobile No <span style="color:red">*</span> : </label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="number" placeholder="Mobile No">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">Email Address :</label>
                                    <div class="col-md-8">
                                        <input type="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-for-label col-md-4 text-right">Thana :</label>
                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="thana" placeholder="Thana">
                                    </div>
                                </div>
                                <div class="form-group row" style="padding-top: 70px;">
                                    <label for="" class="col-for-label col-md-4 text-right">Verification Status :</label>
                                    <div class="col-md-8">
                                        <label for="">
                                            <input type="radio" name="verification[]" id="" value="yes"> Yes </label>
                                        <label> <input type="radio" name="verification[]" id="" value="no" checked> No </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="float-right">
                            <input type="button" class="btn btn-success" value="Save">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>