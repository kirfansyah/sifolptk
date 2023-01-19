   <?php $this->load->view('templates/header'); ?>
   <?php $this->load->view('templates/navbar'); ?>

   <!-- BEGIN: Content-->
   <div class="app-content content">
       <div class="content-overlay"></div>
       <div class="header-navbar-shadow"></div>
       <div class="content-wrapper">

           <div class="content-body">
               <!-- Basic Horizontal form layout section start -->
               <section id="basic-horizontal-layouts">
                   <div class="row match-height">
                       <div class="col-md-6 col-12">
                           <div class="card">
                               <div class="card-header">
                                   <h4 class="card-title">Data Pelayanan</h4>
                               </div>
                               <form class="user" method="post" action="<?php echo base_url('pegawai/update'); ?> " id="harian">
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
                                                                       <input type="text" id="nama" class="form-control nama" name="nama" placeholder="Nama" value="<?= $harian->nama; ?>" readonly>
                                                                       <input type="hidden" id="id" class="form-control nama" name="id" placeholder="id" value="<?= $harian->id; ?>">
                                                                       <input type="hidden" id="id_layanan" class="form-control nama" name="id_layanan" placeholder="id" value="<?= $harian->id_layanan; ?>">
                                                                       <input type="hidden" id="id_pegawai" class="form-control nama" name="id_pegawai" placeholder="id" value="<?= $harian->id_pegawai; ?>">
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
                                                                       <input maxlength="13" type="text" id="no_hp" class="form-control no_hp" name="no_hp" placeholder="No. Hp" value="<?= $harian->no_hp; ?>" readonly>
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
                                                                   <span>No. Registrati</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="text" id="no_reg" class="form-control no_reg" name="no_reg" placeholder="no_reg" value="<?= $harian->no_reg; ?>" readonly>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-mail"></i>
                                                                       </div>
                                                                       <?php echo form_error('no_reg', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Tgl. Registrasi</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="text" id="tanggal_registrasi" class="form-control " name="tanggal_registrasi" placeholder="Tgl. lahir" value="<?= $harian->tanggal_registrasi; ?>" readonly>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-calendar"></i>
                                                                       </div>
                                                                       <?php echo form_error('tanggal_registrasi', '<small class="text-danger pl-3">', '</small>'); ?>
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
                                                                       <input type="text" id="layanan" class="form-control " name="layanan" placeholder="Tgl. lahir" value="<?= $harian->layanan; ?>" readonly>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-calendar"></i>
                                                                       </div>
                                                                       <?php echo form_error('layanan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Pegawai Pelaksana</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="text" id="nama_pegawai" class="form-control " name="nama_pegawai" placeholder="Tgl. lahir" value="<?= $harian->nama_pegawai; ?>" readonly>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-calendar"></i>
                                                                       </div>
                                                                       <?php echo form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Keterangan</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <fieldset class="form-group">
                                                                           <textarea class="form-control keterangan" id="basicTextarea" name="keterangan" rows="3" placeholder="Tempat Lahir"></textarea>
                                                                       </fieldset>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-users"></i>
                                                                       </div>
                                                                       <?php echo form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="form-group col-md-8 offset-md-4">

                                                       </div>
                                                       <div class="col-md-8 offset-md-4">
                                                           <?php if ($harian->sts_app == '1') { ?>
                                                               <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                                               <button type="button" id="selesai" class="btn btn-outline-warning mr-1 mb-1">Selesai</button>
                                                           <?php } else { ?>
                                                               <button type="submit" class="btn btn-primary mr-1 mb-1" disabled>Update</button>
                                                               <button type="button" id="selesai" class="btn btn-outline-warning mr-1 mb-1" disabled>Selesai</button>
                                                           <?php } ?>
                                                       </div>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </form>
                           </div>
                       </div>
                       <div class="col-md-6 col-12">
                           <div class="card">
                               <div class="card-header">
                                   <h4 class="card-title">Timeline Pelayanan</h4>
                               </div>
                               <div class="card-content">
                                   <div class="card-body">
                                       <ul class="activity-timeline timeline-left list-unstyled">
                                           <?php $jml = count($timeline);
                                            $i = 0;
                                            ?>
                                           <?php foreach ($timeline as $key => $timeline_row) { ?>
                                               <?php if ($key == key($timeline)) { ?>
                                                   <li>
                                                       <div class="timeline-icon bg-success">
                                                           <i class="feather icon-check font-medium-2 align-middle"></i>
                                                       </div>
                                                       <div class="timeline-info">
                                                           <p class="font-weight-bold  mb-0"><?= $timeline_row->keterangan ?></p>
                                                       </div>
                                                       <small class="text-muted"><?= get_time_ago($timeline_row->time) ?></small>
                                                   </li>
                                               <?php } else { ?>
                                                   <li>
                                                       <div class="timeline-icon bg-primary">
                                                           <i class="feather icon-check font-medium-2 align-middle"></i>
                                                       </div>
                                                       <div class="timeline-info">
                                                           <p class="font-weight-bold text-muted mb-0"><?= $timeline_row->keterangan ?></p>
                                                       </div>
                                                       <small class="text-muted"><?= get_time_ago($timeline_row->time) ?></small>
                                                   </li>
                                               <?php } ?>

                                           <?php } ?>

                                           <!-- <li>
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
                                           </li> -->
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
               <!-- // Basic Horizontal form layout section end -->

           </div>
       </div>
   </div>
   <!-- END: Content-->


   <?php $this->load->view('templates/footer'); ?>

   <script type="text/javascript">
       $(document).ready(function() {
           $('.keterangan').val('<?= $harian->keterangan ?>')

           $("#harian").on("submit", function(event) {
               event.preventDefault();
               //    console.log($(this).serialize());
               let x = confirm('Update data ?')
               if (x) {
                   $.ajax({
                       type: 'post',
                       dataType: 'json',
                       url: '<?= base_url("harian/update") ?>',
                       data: $(this).serialize(),
                       success: function(response) {
                           console.log(response)
                           if (response.status == 200) {
                               Swal.fire(
                                   response.message,
                                   '',
                                   'success'
                               )
                               setTimeout(function() {

                                   location.reload();
                               }, 1000)
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

           $("#selesai").on("click", function(event) {
               event.preventDefault();
               console.log($('form').serialize());
               let x = confirm('Jika anda menekan tombol selesai, anda tidak dapat mengubah data lagi, yakin ?')
               if (x) {
                   $.ajax({
                       type: 'post',
                       dataType: 'json',
                       url: '<?= base_url("harian/selesai") ?>',
                       data: $('form').serialize(),
                       success: function(response) {
                           console.log(response)
                           if (response.status == 200) {
                               Swal.fire(
                                   response.message,
                                   '',
                                   'success'
                               )
                               setTimeout(function() {
                                   location.reload();
                               }, 1000)
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

       });
   </script>