   <?php $this->load->view('templates/header'); ?>
   <?php $this->load->view('templates/navbar'); ?>
   <!-- BEGIN: Content-->
   <div class="app-content content">
       <div class="content-overlay"></div>
       <div class="header-navbar-shadow"></div>
       <div class="content-wrapper">

           <div class="content-body">

               <!-- Zero configuration table -->
               <section id="basic-datatable">
                   <div class="row">
                       <div class="col-12">
                           <div class="card">
                               <div class="card-header">
                                   <h4 class="card-title">DATA LAYANAN</h4>
                               </div>
                               <div class="card-content">
                                   <div class="card-body card-dashboard">

                                       <a type="button" href="<?= base_url('layanan/add_layanan') ?>" class="btn btn-primary btn-sm waves-effect waves-light" name="btn_add" value=""><i class="feather icon-plus-circle
"></i> Tambah Layanan</a>
                                       <div class="table-responsive">
                                           <table class="table zero-configuration">
                                               <thead>
                                                   <tr>
                                                       <th>Layanan</th>

                                                       <th>Aksi</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <?php foreach ($layanan as $layanan_row) : ?>
                                                       <tr>
                                                           <td><?= $layanan_row->layanan ?></td>
                                                           <td>
                                                               <a class="btn btn-sm btn-outline-success" href="<?= base_url('layanan/edit/') . $layanan_row->id ?>"><i class="feather icon-edit"></i></a>
                                                               <div class="btn btn-sm btn-outline-danger hapus" id="hapus" data-data="<?= $layanan_row->id ?>"><i class="feather icon-trash"></i></div>
                                                           </td>
                                                       </tr>
                                                   <?php endforeach; ?>

                                               <tfoot>
                                                   <tr>
                                                       <th>Layanan</th>
                                                       <th>Aksi</th>
                                                   </tr>
                                               </tfoot>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </section>
               <!--/ Zero configuration table -->

           </div>
       </div>
   </div>
   <!-- END: Content-->


   <?php $this->load->view('templates/footer2'); ?>
   <script type="text/javascript">
       $(document).ready(function() {


           $('.hapus').click(function() {
               let id = $(this).attr('data-data')
               let url = "<?= base_url() ?>"
               let x = confirm('Apakah anda akan menghapus data ini ?')
               if (x) {
                   window.location = url + "layanan/delete/" + id;
               } else {
                   Swal.fire(
                       'Cancel!',
                       '',
                       'error'
                   )
               }


           })

       });
   </script>

   <?php if ($this->session->flashdata('message') == 'add') : ?>
       <script>
           Swal.fire(
               'Data Tersimpan!',
               '',
               'success'
           )
       </script>
   <?php endif; ?>

   <?php if ($this->session->flashdata('message') == 'update') : ?>
       <script>
           Swal.fire(
               'Data Berhasil Diupdate!',
               '',
               'success'
           )
       </script>
   <?php endif; ?>

   <?php if ($this->session->flashdata('message') == 'delete') : ?>
       <script>
           Swal.fire(
               'Data Berhasil Dihapus!',
               '',
               'success'
           )
       </script>
   <?php endif; ?>