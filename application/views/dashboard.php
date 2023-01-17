   <?php $this->load->view('templates/header'); ?>
   <?php $this->load->view('templates/navbar'); ?>

   <!-- BEGIN: Content-->
   <div class="app-content content">
       <div class="content-overlay"></div>
       <div class="header-navbar-shadow"></div>
       <div class="content-wrapper">
           <div class="content-header row">
           </div>
           <div class="content-body">
               <!-- Dashboard Analytics Start -->
               <section id="dashboard-analytics">

                   <!-- <div class="row match-height"> -->
                   <div class="row ">

                       <!-- CrossFade Carousel Start -->
                       <div class="col-md-6 col-sm-12">
                           <div class="card">
                               <div class="card-header">
                                   <h4 class="card-title">Crossfade</h4>
                               </div>
                               <div class="card-content">
                                   <div class="card-body">
                                       <!-- <p>
                                           Add <code>.carousel-fade</code> to your carousel to animate slides with a fade transition instead of a
                                           slide.
                                       </p> -->
                                       <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                           <div class="carousel-inner">
                                               <div class="carousel-item active">
                                                   <img src="<?= base_url() ?>/app-assets/images/slider/06.jpg" class="img-fluid d-block w-100" alt="cf-img-1">
                                               </div>
                                               <div class="carousel-item">
                                                   <img src="<?= base_url() ?>/app-assets/images/slider/02.jpg" class="img-fluid d-block w-100" alt="cf-img-2">
                                               </div>
                                               <div class="carousel-item">
                                                   <img src="<?= base_url() ?>/app-assets/images/slider/05.jpg" class="img-fluid d-block w-100" alt="cf-img-3">
                                               </div>
                                           </div>
                                           <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                               <span class="sr-only">Previous</span>
                                           </a>
                                           <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                               <span class="sr-only">Next</span>
                                           </a>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <!-- CrossFade Carousel End -->
                       <div class="col-lg-6 col-12">
                           <div class="card">
                               <div class="card-content">
                                   <div class="card-body">
                                       <ul class="nav nav-tabs mb-3" role="tablist">
                                           <li class="nav-item">
                                               <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                                   <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Riwayat</span>
                                               </a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link d-flex align-items-center" id="information-tab" data-toggle="tab" href="#information" aria-controls="information" role="tab" aria-selected="false">
                                                   <i class="feather icon-info mr-25"></i><span class="d-none d-sm-block">Antrian Baru</span>
                                               </a>
                                           </li>
                                       </ul>
                                       <div class="tab-content">
                                           <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                               <!-- users edit media object start -->

                                               <!-- users edit media object ends -->
                                               <!-- users edit account form start -->
                                               <div class="card">
                                                   <div class="card-header">
                                                       <h4 class="card-title">Timeline Pelayanan</h4>
                                                   </div>
                                                   <div class="card-content">
                                                       <div class="card-body">
                                                           <ul class="activity-timeline timeline-left list-unstyled">
                                                               <li>
                                                                   <div class="timeline-icon bg-primary">
                                                                       <i class="feather icon-plus font-medium-2 align-middle"></i>
                                                                   </div>
                                                                   <div class="timeline-info">
                                                                       <p class="font-weight-bold mb-0">Client Meeting</p>
                                                                       <span class="font-small-3">Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                                                                   </div>
                                                                   <small class="text-muted">25 mins ago</small>
                                                               </li>
                                                               <li>
                                                                   <div class="timeline-icon bg-warning">
                                                                       <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                                                                   </div>
                                                                   <div class="timeline-info">
                                                                       <p class="font-weight-bold mb-0">Email Newsletter</p>
                                                                       <span class="font-small-3">Cupcake gummi bears soufflé caramels candy</span>
                                                                   </div>
                                                                   <small class="text-muted">15 days ago</small>
                                                               </li>
                                                               <li>
                                                                   <div class="timeline-icon bg-danger">
                                                                       <i class="feather icon-check font-medium-2 align-middle"></i>
                                                                   </div>
                                                                   <div class="timeline-info">
                                                                       <p class="font-weight-bold mb-0">Plan Webinar</p>
                                                                       <span class="font-small-3">Candy ice cream cake. Halvah gummi bears</span>
                                                                   </div>
                                                                   <small class="text-muted">20 days ago</small>
                                                               </li>
                                                               <li>
                                                                   <div class="timeline-icon bg-success">
                                                                       <i class="feather icon-check font-medium-2 align-middle"></i>
                                                                   </div>
                                                                   <div class="timeline-info">
                                                                       <p class="font-weight-bold mb-0">Launch Website</p>
                                                                       <span class="font-small-3">Candy ice cream cake. </span>
                                                                   </div>
                                                                   <small class="text-muted">25 days ago</small>
                                                               </li>
                                                               <li>
                                                                   <div class="timeline-icon bg-primary">
                                                                       <i class="feather icon-check font-medium-2 align-middle"></i>
                                                                   </div>
                                                                   <div class="timeline-info">
                                                                       <p class="font-weight-bold mb-0">Marketing</p>
                                                                       <span class="font-small-3">Candy ice cream. Halvah bears Cupcake gummi bears.</span>
                                                                   </div>
                                                                   <small class="text-muted">28 days ago</small>
                                                               </li>
                                                           </ul>
                                                       </div>
                                                   </div>
                                               </div>
                                               <!-- users edit account form ends -->
                                           </div>
                                           <div class="tab-pane" id="information" aria-labelledby="information-tab" role="tabpanel">
                                               <!-- users edit Info form start -->
                                               <div class="row match-height">
                                                   <div class="col-md-12 col-12">
                                                       <div class="card">
                                                           <div class="card-header">
                                                               <h4 class="card-title">Tambah P</h4>
                                                           </div>
                                                           <form class="user" method="post" action="<?php echo base_url('pegawai/add'); ?> ">
                                                               <div class="card-content">
                                                                   <div class="card-body">
                                                                       <form class="form form-horizontal">
                                                                           <div class="form-body">
                                                                               <div class="row">
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>Nama</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <input type="text" id="nama" class="form-control nama" name="nama" placeholder="Nama" value="<?= set_value('nama'); ?>">
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-user"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>NIK</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <input maxlength="16" type="text" id="nik" class="form-control nik" name="nik" placeholder="NIK" value="<?= set_value('nik'); ?>">
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-user"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>No. Hp</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <input maxlength="13" type="text" id="no_hp" class="form-control no_hp" name="no_hp" placeholder="No. Hp" value="<?= set_value('no_hp'); ?>">
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-user"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>Alamat</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <fieldset class="form-group">
                                                                                                       <textarea class="form-control" id="basicTextarea" name="alamat" rows="3" placeholder="Alamat"></textarea>
                                                                                                   </fieldset>
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-users"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>Jabatan</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <input type="text" id="jabatan" class="form-control jabatan" name="jabatan" placeholder="Jabatan" value="<?= set_value('jabatan'); ?>">
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-mail"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>Tgl. Lahir</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <input type="text" id="tgl_lahir" class="form-control pickadate" name="tgl_lahir" placeholder="Tgl. lahir" value="<?= set_value('tgl_lahir'); ?>">
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-calendar"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>Tempat Lahir</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <fieldset class="form-group">
                                                                                                       <textarea class="form-control" id="basicTextarea" name="tempat_lahir" rows="3" placeholder="Tempat Lahir"></textarea>
                                                                                                   </fieldset>
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-users"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="form-group col-md-8 offset-md-4">

                                                                                   </div>
                                                                                   <div class="col-md-8 offset-md-4">
                                                                                       <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                                                       <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button>
                                                                                   </div>
                                                                               </div>
                                                                           </div>
                                                                       </form>
                                                                   </div>
                                                               </div>
                                                           </form>
                                                       </div>
                                                   </div>
                                               </div>
                                               <!-- users edit Info form ends -->
                                           </div>

                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

               </section>
               <!-- Dashboard Analytics end -->

               <!-- users edit start -->
               <section class="users-edit">

               </section>
               <!-- users edit ends -->

           </div>
       </div>
   </div>
   <!-- END: Content-->

   <?php $this->load->view('templates/footer'); ?>