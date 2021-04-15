<?= $this->extend('admin/layout/base') ?>

<?=  $this->section('content')?>
<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">EMAIL Form</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#!">EMAIL</a></li>
                    <li class="breadcrumb-item"><a href="#!">SEND</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>SEND EMAIL</h5>
            </div>
            <div class="card-body">
                <?php if(session()->has('success')): ?>
                    <div class="text text-success"><?= session('success') ?></div>
                <?php endif;?>
                <?php if (isset($validation)): ?>
                    <?= $validation->listErrors() ?>
                <?php endif;?>

                <form action="<?= base_url('public').route_to('sendEmail') ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="name">From</label>
                                <input type="text" name="from" class="form-control" id="name" aria-describedby="emailHelp" value="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="Text">To</label>
                                <input type="text" name="to" class="form-control" id="Text" placeholder="">
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="password">Subject</label>
                                <input type="text" name="subject" class="form-control" id="password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="floating-label" for="password">File</label>
                                <input type="file" name="photo" class="form-control" id="password" placeholder="">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="floating-label" for="password">Text</label>
                                <textarea name="body" rows="7"  cols="10" class="form-control" id=""></textarea>
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
