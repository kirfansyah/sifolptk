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
                                   <h4 class="card-title">PUSAT INFORMASI LAYANAN PTK</h4>

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
                                                   <img src="<?= base_url() ?>/app-assets/images/slider/3375854.jpg" class="img-fluid d-block w-100" alt="cf-img-1">
                                               </div>
                                               <div class="carousel-item">
                                                   <img src="<?= base_url() ?>/app-assets/images/slider/2961334.jpg" class="img-fluid d-block w-100" alt="cf-img-2">
                                               </div>
                                               <div class="carousel-item">
                                                   <img src="<?= base_url() ?>/app-assets/images/slider/5128511.jpg" class="img-fluid d-block w-100" alt="cf-img-3">
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
                                                       <div class="col">
                                                           <div class="col">
                                                               <div class="col">
                                                                   <h4 class="card-title">Timeline Pelayanan</h4>
                                                               </div>

                                                           </div>

                                                       </div>

                                                   </div>
                                                   <div class="card-header">
                                                       <form class="form-inline no_regis">
                                                           <div class="form-group mx-sm-3 mb-2 mr-1">
                                                               <label for="inputPassword2" class="sr-only">No Registrasi</label>
                                                               <input type="text" class="form-control" name="no_regis" id="no_regis" placeholder="No Registrasi">
                                                           </div>
                                                           <button type="submit" class="btn btn-primary mb-2">Tracking Proses</button>
                                                       </form>
                                                   </div>
                                                   <div class="card-content">
                                                       <div class="card-body">
                                                           <ul class="activity-timeline timeline-left list-unstyled">
                                                               <div id="replace">
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
                                                               </div>
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
                                                           <div class="card-header" id="empty">
                                                               <h4 class="card-title">Registrasi</h4>
                                                           </div>
                                                           <form class="user" method="post" action="<?php echo base_url('registrasi/add'); ?> " id="form-registrasi">
                                                               <div class="card-content">
                                                                   <div class="card-body">
                                                                       <form class="form form-horizontal">
                                                                           <div class="form-body">
                                                                               <div class="row" id="noreg">
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>Nama</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <input type="text" id="nama" class="form-control nama" name="nama" placeholder="Nama" value="<?= set_value('nama'); ?>" required>
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
                                                                                               <span>No. Hp</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <input maxlength="13" type="text" id="no_hp" class="form-control no_hp" name="no_hp" placeholder="No. Hp" value="<?= set_value('no_hp'); ?>" required>
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
                                                                                               <span>Layanan</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <select class="form-control" name="layanan" required>
                                                                                                       <option value="">-Pliih-</option>
                                                                                                       <?php foreach ($layanan as $layanan_row) : ?>
                                                                                                           <option value="<?= $layanan_row->id ?>"><?= $layanan_row->layanan ?></option>
                                                                                                       <?php endforeach; ?>
                                                                                                   </select>
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-users"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('layanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                                               </div>
                                                                                           </div>
                                                                                       </div>
                                                                                   </div>
                                                                                   <div class="col-12">
                                                                                       <div class="form-group row">
                                                                                           <div class="col-md-4">
                                                                                               <span>Pegawai</span>
                                                                                           </div>
                                                                                           <div class="col-md-8">
                                                                                               <div class="position-relative has-icon-left">
                                                                                                   <select class="form-control" name="pegawai" required>
                                                                                                       <option value="">-Pliih-</option>
                                                                                                       <?php foreach ($pegawai as $pegawai_row) : ?>
                                                                                                           <option value="<?= $pegawai_row->id ?>"><?= $pegawai_row->nama ?></option>
                                                                                                       <?php endforeach; ?>
                                                                                                   </select>
                                                                                                   <div class="form-control-position">
                                                                                                       <i class="feather icon-users"></i>
                                                                                                   </div>
                                                                                                   <?php echo form_error('pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
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

   <!-- Modal -->
   <div class="modal fade text-left" id="composeForm" tabindex="-1" role="dialog" aria-labelledby="emailCompose" aria-hidden="true">
       <div class="modal-dialog modal-dialog-scrollable">
           <div class="modal-content">
               <div class="modal-header">
                   <h3 class="modal-title text-text-bold-600" id="emailCompose">Rate Pelayanan</h3>
                   <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button> -->
               </div>
               <div class="modal-body pt-1">
                   <div class="form-label-group mt-1">
                       <input type="hidden" id="id_kar" class="form-control" placeholder="To" name="fname-floating">

                   </div>
                   <center>
                       <div id="rateYo"></div>
                   </center>
               </div>
               <div class="modal-footer">
                   <input type="button" value="Send" class="btn btn-primary" id="getRating">
                   <input type="Reset" value="Cancel" class="btn btn-white" data-dismiss="modal">
               </div>
           </div>
       </div>
   </div>

   <!-- <script src="<?= base_url(); ?>app-assets/vendors/js/vendors.min.js"></script> -->


   <?php $this->load->view('templates/footer'); ?>
   <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script> -->
   <script>
       $("#form-registrasi").on("submit", function(event) {
           event.preventDefault();
           //    console.log($(this).serialize());
           let x = confirm('Apakah anda yakin data yang di input sudah benar ?')
           if (x) {
               $.ajax({
                   type: 'post',
                   dataType: 'json',
                   url: '<?= base_url("registrasi/add") ?>',
                   data: $(this).serialize(),
                   success: function(response) {
                       console.log(response)
                       if (response.status == 200) {
                           $('#empty').html('')
                           $('#noreg').html(`<h1>Nomor registrasi kamu <div class="badge badge-success">${response.noreg}<div></h1>`)

                           Swal.fire(
                               'Sukses Mendapat Nomor Registrasi!',
                               '',
                               'success'
                           )
                       } else {
                           Swal.fire(
                               response.message,
                               '',
                               'error'
                           )
                       }

                   },
                   error: function() {
                       Swal.fire(
                           'Gagal menyimpan data!',
                           '',
                           'error'
                       )
                   }

               })
           } else {
               Swal.fire(
                   'Batal!',
                   '',
                   'error'
               )
           }

       });
       $(".no_regis").on("submit", function(event) {
           event.preventDefault();
           console.log($('.no_regis').serialize());
           let x = confirm('Apakah anda yakin data yang di input sudah benar ?')
           if (x) {
               $.ajax({
                   type: 'post',
                   dataType: 'json',
                   url: '<?= base_url("dashboard/tracking") ?>',
                   data: $(this).serialize(),
                   success: function(response) {
                       //    console.log(response)
                       if (response.status == 200) {
                           $('#replace').html('')
                           $('#replace').html(response.html)
                           console.log(response.ket)
                           if (response.keterangan == 'Selesai' && response.ket == 'belum') {
                               setTimeout(function() {
                                   $('#composeForm').modal('show').on('hide.bs.modal', function(e) {
                                       e.preventDefault();
                                   });
                               }, 3000)

                               $('#id_kar').val(response.id_pegawai)
                           } else {
                               Swal.fire(
                                   'Berhasil!',
                                   '',
                                   'success'
                               )
                           }




                       } else {
                           Swal.fire(
                               response.message,
                               '',
                               'error'
                           )
                       }

                   },
                   error: function() {
                       Swal.fire(
                           'Gagal menyimpan data!',
                           '',
                           'error'
                       )
                   }

               })
           } else {
               Swal.fire(
                   'Batal!',
                   '',
                   'error'
               )
           }

       });



       $(document).ready(function() {
           console.log("ready!");
       });
   </script>

   <script type="text/javascript" src="<?= base_url() ?>app-assets/rate/jquery.rateyo.js"></script>
   <script>
       $(function() {

           $("#rateYo").rateYo({
               starWidth: "40px"
           });

           var $rateYo = $("#rateYo").rateYo();

           $("#getRating").click(function() {

               /* get rating */
               var rating = $rateYo.rateYo("rating");
               var id_pegawai = $('#id_kar').val()
               var no_reg = $('#no_regis').val()
               //    alert(no_reg)

               console.log(rating)
               $.ajax({
                   url: "<?= base_url('dashboard/rating') ?>",
                   type: 'post',
                   dataType: 'json',
                   data: {
                       rating,
                       id_pegawai,
                       no_reg

                   },
                   success: function(response) {
                       Swal.fire(
                           'Terimakasih!',
                           '',
                           'success'
                       )
                   },
                   error: function() {
                       Swal.fire(
                           'Gagal menyimpan data!',
                           '',
                           'error'
                       )
                   }
               })
               $('#composeForm').unbind();
               $('#composeForm').modal('hide');
           });

       });
   </script>