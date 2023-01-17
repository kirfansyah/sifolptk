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
                                   <h4 class="card-title">Tambah Layanan</h4>
                               </div>
                               <form class="user" method="post" action="<?php echo base_url('layanan/add'); ?> ">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <form class="form form-horizontal">
                                               <div class="form-body">
                                                   <div class="row">
                                                       <div class="col-12">
                                                           <div class="form-group row">
                                                               <div class="col-md-4">
                                                                   <span>Layanan</span>
                                                               </div>
                                                               <div class="col-md-8">
                                                                   <div class="position-relative has-icon-left">
                                                                       <input type="text" id="layanan" class="form-control layanan" name="layanan" placeholder="Layanan" value="<?= set_value('layanan'); ?>">
                                                                       <div class="form-control-position">
                                                                           <i class="feather icon-user"></i>
                                                                       </div>
                                                                       <?php echo form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
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