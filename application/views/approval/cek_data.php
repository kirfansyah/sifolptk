   <?php $this->load->view('templates/header'); ?>
   <?php $this->load->view('templates/navbar'); ?>
<style>
    th{
        height: 40px;;
    }
</style>
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
                                   <h4 class="card-title"></h4>
                               </div>
                               <form class="user" method="post" action="<?php echo base_url('layanan/add'); ?> " id="approve">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <form class="form form-horizontal">
                                               <div class="form-body">
                                                   <div class="row">
                                                       <div class="col-12">
                                                           <table align="center">
                                                            <thead>
                                                                <tr>
                                                                <th><h1>Permohonan <?= $approval->layanan ?></h1></th>
                                                                </tr>
                                                                <tr>
                                                                <th><hr></th>
                                                                </tr>
                                                                
                                                            </thead>
                                                           </table>
                                                           <br>
                                                           <br>
                                                           <table align="left" style="height: 80px;;">                                                            
                                                                <tr>
                                                                <th><h4>Nama Pemohon</h4></th>
                                                                <th style="width: 60px;;"></th>
                                                                <th> :</th>
                                                                <th style="width: 40px;;"></th>
                                                                <th><h4><?= $approval->nama ?></h4></th>
                                                                </tr>  
                                                                <tr>
                                                                <th><h4>No. Hp</h4></th>
                                                                <th style="width: 60px;;"></th>
                                                                <th> :</th>
                                                                <th style="width: 0px;;"></th>
                                                                <th><h4><?= $approval->no_hp ?></h4></th>
                                                                </tr>                                                                
                                                                <tr>
                                                                <th><h4>No. Registrasi</h4></th>
                                                                <th style="width: 60px;;"></th>
                                                                <th> :</th>
                                                                <th style="width: 0px;;"></th>
                                                                <th><h4><div class="badge badge-success"><?= $approval->no_reg ?></div></h4></th>
                                                                </tr>                                                                
                                                                <tr>
                                                                <th><h4>Tanggal Registrasi</h4></th>
                                                                <th style="width: 60px;;"></th>
                                                                <th> :</th>
                                                                <th style="width: 0px;;"></th>
                                                                <th><h4><?= date('d-m-Y', strtotime($approval->tanggal_registrasi)) ?></h4></th>
                                                                </tr>   
                                                                <tr>
                                                                <th><h4>Pengajuan Layanan</h4></th>
                                                                <th style="width: 60px;;"></th>
                                                                <th> :</th>
                                                                <th style="width: 0px;;"></th>
                                                                <th><h4><?= $approval->layanan ?></h4></th>
                                                                </tr> 
                                                                <tr>
                                                                <th><h4>Petugas Layanan</h4></th>
                                                                <th style="width: 60px;;"></th>
                                                                <th> :</th>
                                                                <th style="width: 0px;;"></th>
                                                                <th><h4><?= $approval->nama_pegawai ?></h4></th>
                                                                </tr>                                                               
                                                            
                                                           </table>
                                                       </div>

                                                       <div class="form-group col-md-8 offset-md-4">

                                                       </div>
                                                       <div class="col-md-2  offset-md-9">
                                                        <input type="hidden" name="id" value="<?= $approval->id ?>">
                                                        <input type="hidden" name="id" value="<?= $approval->id ?>">
                                                           <button type="submit" class="btn btn-primary mr-1 mb-1">Approve</button>
                                                           <!-- <button type="reset" class="btn btn-outline-warning mr-1 mb-1">Reset</button> -->
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
         $("#approve").on("submit", function(event) {
           event.preventDefault();
           //    console.log($(this).serialize());
           let x = confirm('Anda ingin approve data ini ?')
           if (x) {
               $.ajax({
                   type: 'post',
                   dataType: 'json',
                   url: '<?= base_url("approval/update") ?>',
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
           }else{
            Swal.fire(
                           'Batal!',
                           '',
                           'error'
                       )
           }

       });
    </script>