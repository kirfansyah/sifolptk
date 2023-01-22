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
                                   <h4 class="card-title">Tambah User</h4>
                               </div>
                               <form class="user" method="post" action="<?php echo base_url('user/add'); ?> " id="myFORM">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <form class="form form-horizontal">
                                               <div class="form-body">
                                                   <div class="row">
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>NIK</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="text" maxlength="16" id="nik" class="form-control nik" name="nik" placeholder="Nik" value="<?= set_value('nik'); ?>">
                                                                       <input type="text" maxlength="16" id="id_pegawai" class="form-control id_pegawai" name="id_pegawai" placeholder="id_pegawai">
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
                                                                   <span>Nama</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="text" id="name" class="form-control name" name="name" placeholder="Nama" value="<?= set_value('name'); ?>" readonly>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-user"></i>
                                                                       </div>
                                                                       <?php echo form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Role</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">

                                                                       <select name="role" id="role" class="form-control role">
                                                                           <option value="">-Pilih-</option>
                                                                           <option value="1">Admin</option>
                                                                           <option value="2">User</option>
                                                                       </select>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-users"></i>
                                                                       </div>
                                                                       <?php echo form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Status</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <select name="status" id="status" class="form-control status">
                                                                           <option value="">-Pilih-</option>
                                                                           <option value="1">Aktif</option>
                                                                           <option value="0">Non-Aktif</option>
                                                                       </select>
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-users"></i>
                                                                       </div>
                                                                       <?php echo form_error('status', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Email</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="email" id="email" class="form-control email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-mail"></i>
                                                                       </div>
                                                                       <?php echo form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Password</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="password" id="password1" class="form-control password1" name="password1" placeholder="Password">
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-lock"></i>
                                                                       </div>
                                                                       <?php echo form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Password Confirm</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="password" id="password2" class="form-control password2" name="password2" placeholder="Repeat Password">
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-lock"></i>
                                                                       </div>
                                                                       <?php echo form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
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

   <script>
       $('#nik').change(function() {
           //    alert($(this).val())
           let nik = $(this).val()
           $.ajax({
               data: {
                   nik
               },
               type: 'post',
               dataType: 'json',
               url: "<?= base_url('user/cek') ?>",
               success: function(response) {
                   //    alert(response)
                   console.log(response)
                   if (response.status == '200') {
                       $('.name').val(response.nama)
                       $('.id_pegawai').val(response.id_pegawai)
                   } else {
                       $(':input', '#myFORM')
                           .not(':button, :submit, :reset, :hidden')
                           .val('')
                           .prop('checked', false)
                           .prop('selected', false);
                       Swal.fire(
                           response.message,
                           '',
                           'error'
                       )
                   }
               }
           })
       })
   </script>