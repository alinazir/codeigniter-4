<?= $this->extend('admin/layout/base') ?>

<?= $this->section('content') ?>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Persons Form</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Persons</a></li>
                    <li class="breadcrumb-item"><a href="#!">List</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- [ Main Content ] start -->
<div class="row">
    <!-- customar project  start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="row align-items-center m-l-0">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6 text-right">
                        <button class="btn btn-success btn-sm btn-round has-ripple" data-toggle="modal" data-target="#modal-report"><i class="feather icon-plus"></i> Add Patient</button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="report-table" class="table table-bordered table-striped mb-0">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Sex</th>
                            <th>Options</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <img src="<?= base_url('public/admin/assets/images/user/avatar-2.jpg')?>" class="img-fluid img-radius wid-40" alt="">
                            </td>
                            <td>Micheal Pewd</td>
                            <td>patient@temp.com</td>
                            <td>+984-9388638</td>
                            <td>male</td>
                            <td>
                                <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="<?= base_url('public/').route_to('personProfile','2') ?>" class="btn btn-primary btn-sm"><i class="feather icon-edit"></i>&nbsp;Profile </a>
                                <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="<?= base_url('public/admin/assets/images/user/avatar-3.jpg')?>" class="img-fluid img-radius wid-40" alt="">
                            </td>
                            <td>Micheal Pewd</td>
                            <td>patient@temp.com</td>
                            <td>+984-9388638</td>
                            <td>male</td>
                            <td>
                                <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-edit"></i>&nbsp;Profile </a>

                                <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="<?= base_url('public/admin/assets/images/user/avatar-5.jpg')?>" class="img-fluid img-radius wid-40" alt="">
                            </td>
                            <td>Erich Mcbride</td>
                            <td>xidim@temp.com</td>
                            <td>+612-1385682</td>
                            <td>female</td>

                            <td>
                                <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-edit"></i>&nbsp;Profile </a>

                                <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="<?= base_url('public/admin/assets/images/user/avatar-1.jpg')?>" class="img-fluid img-radius wid-40" alt="">
                            </td>
                            <td>Micheal Pewd</td>
                            <td>patient@temp.com</td>
                            <td>+984-9388638</td>
                            <td>male</td>
                            <td>
                                <a href="#!" class="btn btn-info btn-sm"><i class="feather icon-edit"></i>&nbsp;Edit </a>
                                <a href="#!" class="btn btn-primary btn-sm"><i class="feather icon-edit"></i>&nbsp;Profile </a>
                                <a href="#!" class="btn btn-danger btn-sm"><i class="feather icon-trash-2"></i>&nbsp;Delete </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- customar project  end -->
</div>
<?= $this->endSection()?>
