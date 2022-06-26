<?= $this->extend('static/base'); ?>
<?= $this->Section('content'); ?>
<div class="row">
    <div class="col-sm-12 col-md-12">
        <div class="card ">
            <div class="card-header py-2">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fs-17 font-weight-600 mb-0">Add Service</h6>
                    </div>
                    <div class="text-right">
                        <a href="" class="btn btn-success btn-sm mr-1"><i class="fas fa-align-justify mr-1"></i>Service List</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php //echo form_open_multipart("service/add_service/" . $service->id) 
                ?>
                <?php //echo form_hidden('id', $service->id) 
                ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="service_name" class="col-sm-2 col-form-label">Service Name<i class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <input type="text" name="service_name" id="service_name" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="service_name" class="col-sm-2 col-form-label">Service Type<i class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <select name="service_type" id="" class="form-control">
                                    <option style="display: none;">Select Service Type</option>
                                        <?php if (is_array($allData)) : ?>
                                        <?php if (count($allData) > 0) : ?>
                                            <?php foreach ($allData as $single_data) : ?>
                                                <option value="<?php echo $single_data->id; ?>"><?php echo $single_data->title; ?></option>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                        <?php endif; ?>
                                
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="service_name" class="col-sm-2 col-form-label">Charge<i class="text-danger">*</i></label>
                            <div class="col-sm-4">
                                <input type="number" name="charge" id="charge" class="form-control" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label"><?php //echo lan('description')  
                                                                                        ?>Description<i class="text-danger"></i></label>
                            <div class="col-sm-4">
                                <textarea name="description" id="description" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <div class="form-group row">
                            <label class="col-sm-4"></label>
                            <div class="col-sm-8">
                                <button type="submit" class="btn btn-success form-control" name="add_service_btn">
                                    Save
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>