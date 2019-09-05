<?php
   $this->load->view('Template/sideBar');
   ?>
<div class="container-fluid">
   
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Pengaturan Admin</h1>
   </div>
   <div class="row">
      <div class="col-xl-6 d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h5 mb-0 text-gray-800">Admin P3D</h1>
      </div>
      <div class="col-xl-6">
         <a href="#" class="btn btn-info btn-sm btn-icon-split" style="float: right;">
         <span class="icon text-white-50">
         <i class="fa fa-plus"></i>
         </span>
         <span class="text">Tambah</span>
         </a>
      </div>
   </div>
   
   <div class="card shadow mb-4">
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th width="80%">Username</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($pengaturan as $p) {                   
                     ?>
                  <tr>
                     <td><?php echo $p->username ?></td>
                     <td>
                        <center>
                        <a href="<?php echo site_url('Pengaturan/editData/'. $p->id_user)?>" class="btn btn-warning btn-sm">
                        <i class="fa fa-pen"></i></a>
                        <a href="<?php echo site_url('Pengaturan/hapusData/'. $p->id_user)?>" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i></a>
                     </td>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <?=
      $this->load->view('Template/footer');
      ?>
</div>