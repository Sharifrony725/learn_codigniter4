<?= $this->extend('static/base.php'); ?>
<?= $this->Section('content'); ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Users List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php if (count($allData) > 0) { ?>
                                <?php foreach ($allData as  $sdata) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $sdata->id ?></td>
                                            <td><?php echo $sdata->name ?></td>
                                            <td><?php echo $sdata->email ?></td>
                                            <td><?php echo $sdata->mobile ?></td>
                                            <td>
                                                <a href="http://" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="http://" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                <?php  } ?>
                            <?php  }else {
                                echo "Data not Found";
                            } ?>
                        </table>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>