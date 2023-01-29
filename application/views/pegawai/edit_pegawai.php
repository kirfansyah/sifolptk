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
                                   <h4 class="card-title">Edit Pegawai</h4>
                               </div>
                               <form class="user" method="post" action="<?php echo base_url('pegawai/update'); ?> ">
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
                                                                       <input type="text" id="nama" class="form-control nama" name="nama" placeholder="Nama" value="<?= $pegawai->nama; ?>">
                                                                       <input type="hidden" id="id" class="form-control nama" name="id" placeholder="id" value="<?= $pegawai->id; ?>">
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
                                                                       <input maxlength="16" type="text" id="nik" class="form-control nik" name="nik" placeholder="NIK" value="<?= $pegawai->nik; ?>">
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
                                                                       <input maxlength="13" type="text" id="no_hp" class="form-control no_hp" name="no_hp" placeholder="No. Hp" value="<?= $pegawai->no_hp; ?>">
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
                                                                           <textarea class="form-control alamat" id="basicTextarea" name="alamat" rows="3" placeholder="Alamat" value="<?= $pegawai->alamat; ?>"></textarea>
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
                                                                       <input type="text" id="jabatan" class="form-control jabatan" name="jabatan" placeholder="Jabatan" value="<?= $pegawai->jabatan; ?>">
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
                                                                       <input type="text" id="tgl_lahir" class="form-control pickadate" name="tgl_lahir" placeholder="Tgl. lahir" value="<?= $pegawai->tgl_lahir; ?>">
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
                                                                           <textarea class="form-control tempat_lahir" id="basicTextarea" name="tempat_lahir" rows="3" placeholder="Tempat Lahir"></textarea>
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
               </section>
               <!-- // Basic Horizontal form layout section end -->

           </div>
       </div>
   </div>
   <!-- END: Content-->


   <?php $this->load->view('templates/footer'); ?>

   <script type="text/javascript">
       $(document).ready(function() {
           $('.alamat').val('<?= $pegawai->alamat ?>')
           $('.tempat_lahir').val('<?= $pegawai->tempat_lahir ?>')
       });
   </script>