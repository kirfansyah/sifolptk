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
                                   <h4 class="card-title">DATA PEGAWAI</h4>
                               </div>
                               <div class="card-content">
                                   <div class="card-body card-dashboard">

                                       <a type="button" href="<?= base_url('pegawai/add_pegawai') ?>" class="btn btn-primary btn-sm waves-effect waves-light" name="btn_add" value=""><i class="feather icon-plus-circle
"></i> Tambah Pegawai</a>
                                       <div class="table-responsive">
                                           <table class="table zero-configuration">
                                               <thead>
                                                   <tr>
                                                       <th>No</th>
                                                       <th>Nama</th>
                                                       <th>NIK</th>
                                                       <th>No HP</th>
                                                       <th>Alamat</th>
                                                       <th>Jabatan</th>
                                                       <th>Tgl. Lahir</th>
                                                       <th>Tempat Lahir</th>
                                                       <th>Rating</th>
                                                       <th>Aksi</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <?php $i = 1;
                                                    foreach ($pegawai as $pegawai_row) : ?>
                                                       <tr>
                                                           <td><?= $i++ ?></td>
                                                           <td><?= $pegawai_row->nama ?></td>
                                                           <td><?= $pegawai_row->nik ?></td>
                                                           <td><?= $pegawai_row->no_hp ?></td>
                                                           <td><?= $pegawai_row->alamat ?></td>
                                                           <td><?= $pegawai_row->jabatan ?></td>
                                                           <td><?= date('d-m-Y', strtotime($pegawai_row->tgl_lahir)) ?></td>
                                                           <td><?= $pegawai_row->tempat_lahir ?></td>
                                                           <td>
                                                               <div class="rateYo" data-rateyo-rating="<?= $pegawai_row->avg_rating ?>" data-rateyo-spacing="10px" data-rateyo-num-stars="5"></div>
                                                           </td>
                                                           <td>
                                                               <a class="btn btn-sm btn-outline-success" href="<?= base_url('pegawai/edit/') . $pegawai_row->id ?>"><i class="feather icon-edit"></i></a>
                                                               <div class="btn btn-sm btn-outline-danger hapus" id="hapus" data-data="<?= $pegawai_row->id ?>"><i class="feather icon-trash"></i></div>
                                                           </td>
                                                       </tr>
                                                   <?php endforeach; ?>

                                               <tfoot>
                                                   <tr>
                                                       <th>No</th>
                                                       <th>Nama</th>
                                                       <th>NIK</th>
                                                       <th>No HP</th>
                                                       <th>Alamat</th>
                                                       <th>Jabatan</th>
                                                       <th>Tgl. Lahir</th>
                                                       <th>Tempat Lahir</th>
                                                       <th>Rating</th>
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
                   window.location = url + "pegawai/delete/" + id;
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

   <script type="text/javascript" src="<?= base_url() ?>app-assets/rate/jquery.rateyo.js"></script>
   <script>
       $(function() {

           $("#rateYo").rateYo({
               starWidth: "20px"
           });


           function rate() {
               alert('helo')
               //    current.rateYo({
               //        rating: 3.2,
               //        readOnly: true
               //    });
           }
           $(".rateYo").rateYo({

               readOnly: true
           });





       });

       function rate(current) {
           alert('helo')
           $('.rateYo').rateYo({
               rating: 3.2,
               readOnly: true
           });
       }
   </script>