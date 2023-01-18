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
                                   <h4 class="card-title">DATA APPROVAL</h4>
                               </div>
                               <div class="card-content">
                                   <div class="card-body card-dashboard">

                                       
                                       <div class="table-responsive">
                                           <table class="table zero-configuration">
                                               <thead>
                                                   <tr>
                                                       <th>No</th>
                                                       <th>Nama Pemohon</th>
                                                       <th>No. Hp</th>
                                                       <th>No. Reg</th>
                                                       <th>Tanggal Registrasi</th>
                                                       <th>Layanan</th>
                                                       <th>Pegawai pelayanan</th>
                                                       <th>Aksi</th>
                                                   </tr>
                                               </thead>
                                               <tbody>
                                                   <?php $i=1; foreach ($approval as $app) : ?>
                                                       <tr>
                                                           <td><?= $i++ ?></td>
                                                           <td><?= $app->nama ?></td>
                                                           <td><?= $app->no_hp ?></td>
                                                           <td> <span class="badge badge-success"><?=$app->no_reg  ?></span></td>
                                                           <td><?= date('d-m-Y', strtotime($app->tanggal_registrasi))  ?></td>
                                                           <td><?= $app->layanan  ?></td>
                                                           <td><?= $app->nama_pegawai  ?></td>
                                                          
                                                           <td>
                                                               <a class="btn btn-sm btn-outline-success" href="<?= base_url('approval/cek/') . $app->id ?>"><i class="feather icon-search"></i></a>
                                                               
                                                           </td>
                                                       </tr>
                                                   <?php endforeach; ?>

                                               <tfoot>
                                                   <tr>
                                                   <th>No</th>
                                                       <th>Nama Pemohon</th>
                                                       <th>No. Hp</th>
                                                       <th>No. Reg</th>
                                                       <th>Tanggal Registrasi</th>
                                                       <th>Layanan</th>
                                                       <th>Pegawai pelayanan</th>
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

   <!-- Modal -->
   <!-- <div class="modal fade" id="ini_modal" tabindex="-1" role="dialog" aria-labelledby="modal_form" aria-hidden="true">
       <form action="" id="modal_form" method="POST" enctype="multipart/form-data">
           <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <input type="hidden" name="formid" id="formid" class="form-control formid">
                       <h4 class="modal-title" id="judul_modal"></h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="row">
                           <div class="col-12">
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Nama</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="formnm" id="formnm" class="form-control formnm" required>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Kode</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="formkd" id="formkd" class="form-control formkd" required>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Versi</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="formversi" id="formversi" class="form-control formversi" required>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Efective</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="formefective" id="formefective" class="form-control datepicker maskdate formefective valid_date" autocomplete="off" required>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Judul (id)</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="formjudul" id="formjudul" class="form-control formjudul" required>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Judul (en)</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="formjudul_english" id="formjudul_english" class="form-control formjudul_english" required>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Keterangan</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="formket" id="formket" class="form-control select2 formket" required>
                                           <option value="">- pilih -</option>
                                           <option value="Complete">Complete</option>
                                           <option value="In-Progress">In-Progress</option>
                                           <option value="Modified">Modified</option>
                                           <option value="Not Applicable">Not Applicable</option>
                                           <option value="Prioritas">Prioritas</option>
                                           <option value="Ready">Ready</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Status</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="formstatus" id="formstatus" class="form-control select2 formstatus" required>
                                           <option value="">- pilih -</option>
                                           <option value="1">Aktif</option>
                                           <option value="0">Non Aktif</option>
                                       </select>
                                   </div>
                               </div>
                               <hr>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Jenis</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="formjnsid" id="formjnsid" class="form-control select2 formjnsid" required>
                                           <option value="">- pilih -</option>
                                           <?php
                                            foreach ($jnsid as $jnsid_row) { ?>
                                               <option value="<?= $jnsid_row->submenuid ?>"><?= $jnsid_row->submenunm ?></option>
                                           <?php } ?>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Kategori</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="formkategoriid" id="formkategoriid" class="form-control select2 formkategoriid">
                                           <option value="">- pilih -</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Kategori 2</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="formkategori2id" id="formkategori2id" class="form-control select2 formkategori2id">
                                           <option value="">- pilih -</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Form Kategori 3</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="formkategori3id" id="formkategori3id" class="form-control select2 formkategori3id">
                                           <option value="">- pilih -</option>
                                       </select>
                                   </div>
                               </div>
                               <hr>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Parameter Tanggal Laporan</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="efective_parameter" id="efective_parameter" class="form-control efective_parameter" required>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Tipe Form</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="tipe" id="tipe" class="form-control select2 tipe" required>
                                           <option value="">- pilih -</option>
                                           <option value="1">Induk</option>
                                           <option value="2">Tunggal</option>
                                           <option value="3">Anak</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row form_owner">
                                   <div class="col-md-4">
                                       <span>Form Induk</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="form_owner" id="form_owner" class="form-control select2">
                                           <option value="">- pilih -</option>
                                           <?php
                                            foreach ($frmowner as $frmowner_row) { ?>
                                               <option value="<?= $frmowner_row->formid ?>"><?= $frmowner_row->formjudul ?></option>
                                           <?php } ?>
                                       </select>
                                   </div>
                               </div>
                               <hr>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Parameter Jenis Approval</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="parameter_jenis_approval" id="parameter_jenis_approval" class="form-control select2 parameter_jenis_approval">
                                           <option value="">- pilih -</option>
                                           <option value="Non-Shift">Non-Shift</option>
                                           <option value="Shift">Shift</option>
                                           <option value="Pengecekan">Pengecekan</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Jumlah Approval</span>
                                   </div>
                                   <div class="col-md-8">
                                       <select name="parameter_jlh_approval" id="parameter_jlh_approval" class="form-control select2 parameter_jlh_approval">
                                           <option value="">- pilih -</option>
                                           <option value="1">1 Approval</option>
                                           <option value="2">2 Approval</option>
                                           <option value="3">3 Approval</option>
                                           <option value="4">4 Approval</option>
                                           <option value="5">5 Approval</option>
                                           <option value="6">6 Approval</option>
                                           <option value="7">7 Approval</option>
                                           <option value="8">8 Approval</option>
                                           <option value="9">9 Approval</option>
                                           <option value="10">10 Approval</option>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Parameter Tanggal Approval</span>
                                   </div>
                                   <div class="col-md-8">
                                       <input type="text" name="parameter_approval" id="parameter_approval" class="form-control parameter_approval" required>
                                   </div>
                               </div>
                               <hr>
                               <div class="form-group row">
                                   <div class="col-md-4">
                                       <span>Status</span>
                                   </div>
                                   <div class="col-md-8">
                                       <ul class="list-unstyled mb-0">
                                           <li class="d-inline-block mr-2">
                                               <fieldset>
                                                   <div class="vs-checkbox-con vs-checkbox-primary">
                                                       <input type="checkbox" name="status_input" id="status_input">
                                                       <span class="vs-checkbox">
                                                           <span class="vs-checkbox--check">
                                                               <i class="vs-icon feather icon-check"></i>
                                                           </span>
                                                       </span>
                                                       <span class="">Form Input</span>
                                                   </div>
                                               </fieldset>
                                           </li>
                                           <li class="d-inline-block mr-2">
                                               <fieldset>
                                                   <div class="vs-checkbox-con vs-checkbox-primary">
                                                       <input type="checkbox" name="status_dataharian" id="status_dataharian">
                                                       <span class="vs-checkbox">
                                                           <span class="vs-checkbox--check">
                                                               <i class="vs-icon feather icon-check"></i>
                                                           </span>
                                                       </span>
                                                       <span class="">Data Harian</span>
                                                   </div>
                                               </fieldset>
                                           </li>
                                           <li class="d-inline-block mr-2">
                                               <fieldset>
                                                   <div class="vs-checkbox-con vs-checkbox-primary">
                                                       <input type="checkbox" name="status_lap" id="status_lap">
                                                       <span class="vs-checkbox">
                                                           <span class="vs-checkbox--check">
                                                               <i class="vs-icon feather icon-check"></i>
                                                           </span>
                                                       </span>
                                                       <span class="">Laporan</span>
                                                   </div>
                                               </fieldset>
                                           </li>
                                           <li class="d-inline-block mr-2">
                                               <fieldset>
                                                   <div class="vs-checkbox-con vs-checkbox-primary">
                                                       <input type="checkbox" name="status_app" id="status_app">
                                                       <span class="vs-checkbox">
                                                           <span class="vs-checkbox--check">
                                                               <i class="vs-icon feather icon-check"></i>
                                                           </span>
                                                       </span>
                                                       <span class="">Approval</span>
                                                   </div>
                                               </fieldset>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-primary">Simpan</button>
                       <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
                   </div>
               </div>
           </div>
       </form>
   </div> -->
   <!-- END Modal -->


   <?php $this->load->view('templates/footer2'); ?>
   <script type="text/javascript">
       $(document).ready(function() {



           $('.hapus').click(function() {
               let id = $(this).attr('data-data')
               let url = "<?= base_url()?>"
               let x = confirm('Apakah anda akan menghapus data ini ?')               
               if(x){
                   window.location = url+"user/delete/"+id;                
               }else{
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