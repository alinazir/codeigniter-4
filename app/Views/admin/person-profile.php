<?= $this->extend('admin/layout/base') ?>

<?=  $this->section('content')?>
<div class="user-profile user-card mb-4">
    <div class="card-header border-0 p-0 pb-0">
        <div class="cover-img-block">
            <!-- <img src="assets/images/profile/cover.jpg" alt="" class="img-fluid"> -->
            <div class="overlay"></div>
            <div class="change-cover">
                <div class="dropdown">
                    <a class="drp-icon dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon feather icon-camera"></i></a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
                        <a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
                        <a class="dropdown-item" href="#"><i class="feather icon-film mr-2"></i> upload video</a>
                        <a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body py-0">
        <div class="user-about-block m-0">
            <div class="row">
                <div class="col-md-4 text-center mt-n5">
                    <div class="change-profile text-center">
                        <div class="dropdown w-auto d-inline-block">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="profile-dp">
                                    <div class="position-relative d-inline-block">
                                        <img class="img-radius img-fluid wid-100" src="<?= base_url('public/admin/assets/images/user/avatar-5.jpg')?>" alt="User image">
                                    </div>
                                    <div class="overlay">
                                        <span>change</span>
                                    </div>
                                </div>
                                <div class="certificated-badge">
                                    <i class="fas fa-certificate text-c-blue bg-icon"></i>
                                    <i class="fas fa-check front-icon text-white"></i>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#"><i class="feather icon-upload-cloud mr-2"></i>upload new</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-image mr-2"></i>from photos</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-shield mr-2"></i>Protact</a>
                                <a class="dropdown-item" href="#"><i class="feather icon-trash-2 mr-2"></i>remove</a>
                            </div>
                        </div>
                    </div>
                    <h5 class="mb-1"><?= $person[0]->name ?></h5>
                    <p class="mb-2 text-muted">UI/UX Designer</p>
                </div>
                <div class="col-md-8 mt-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-globe mr-2 f-18"></i><?= $person[0]->dob ?></a>
                            <div class="clearfix"></div>
                            <a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-user mr-2 f-18"></i><?= $person[0]->gender ?></a>
                            <div class="clearfix"></div>
                            <a href="mailto:demo@domain.com" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-mail mr-2 f-18"></i><?= $person[0]->email ?></a>
                            <div class="clearfix"></div>
                            <a href="#!" class="mb-1 text-muted d-flex align-items-end text-h-primary"><i class="feather icon-phone mr-2 f-18"></i><?= $person[0]->phone ?></a>


                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
                                <div class="media-body">
                                    <p class="mb-0 text-muted"><?= $person[0]->address ?></p>
                                </div>
                            </div>
                            <div class="media">
                                <i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
                                <div class="media-body">
                                    <p class="mb-0 text-muted"><?= $person[0]->city ?></p>
                                </div>
                            </div>

                            <div class="media">
                                <i class="feather icon-map-pin mr-2 mt-1 f-18"></i>
                                <div class="media-body">
                                    <p class="mb-0 text-muted"><?= $person[0]->country ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
