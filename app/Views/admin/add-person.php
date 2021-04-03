<?= $this->extend('admin/layout/base') ?>

<?=  $this->section('content')?>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">New Contact Form</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">Add</a></li>
                    <li class="breadcrumb-item"><a href="#!">Person</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Add Contact Info</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Email">Name</label>
                                <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" value="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Text">Email</label>
                                <input type="text" class="form-control" id="Text" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Icon">Profie Image</label>
                                <input type="file" class="form-control" id="Icon" placeholder="sdf">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group fill">
                                <label class="floating-label" for="Birth">Birth Date</label>
                                <input type="date" class="form-control" id="Birth" placeholder="123">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="Age">Gender</label>
                                <input type="text" class="form-control" id="Age" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="password">Phone</label>
                                <input type="password" class="form-control" id="password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="password">Address</label>
                                <input type="password" class="form-control" id="password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="password">City</label>
                                <input type="password" class="form-control" id="password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="floating-label" for="password">Country</label>
                                <input type="password" class="form-control" id="password" placeholder="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn  btn-primary float-right">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
