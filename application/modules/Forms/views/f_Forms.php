<?php
   $this->load->view('Template/sideBar');
   ?>
<div class="container-fluid">
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Forms</h1>
   </div>
   <div class="row">
      <div class="col-xl-6 d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h5 mb-0 text-gray-800">Pertanyaan Kepada Responden</h1>
      </div>
      <div class="col-xl-6">
         <button type="button" style="float: right;" class="btn btn-info btn-sm btn-icon-split" data-toggle="modal" data-target="#exampleModal">
         <span class="icon text-white-50">
         <i class="fa fa-plus"></i>
         </span>
         <span class="text">Tambah</span>
         </a>
         </button>
         <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Tambah Pertanyaan</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-12">
                           <div class="p-20">
                              <form action="<?php echo base_url(). 'Forms/tambahPertanyaan'; ?>" method="post">
                                 <div class="form-group row">
                                    <label class="col-2 col-form-label">Pertanyaan</label>
                                    <div class="col-10">
                                       <textarea class="form-control" name="pertanyaan" rows="5"></textarea>
                                    </div>
                                 </div>
                                 <div class="form-group row">
                                    <label class="col-2 col-form-label">Deskripsi</label>
                                    <div class="col-10">
                                       <textarea class="form-control" name="deskripsi" rows="5"></textarea>
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-info" value="Simpan">
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="card shadow mb-4">
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th width="80%">Pertanyaan</th>
                     <th>Status</th>
                     <th>Aksi</th>
                  </tr>
               </thead>
               <tbody>
                  <?php 
                     foreach ($getPertanyaan as $p) {                   
                     ?>
                  <tr>
                     <td><?php echo $p->pertanyaan ?></td>
                     <td>
                        <center>
                        <input type="checkbox" name="sheck">
                     </td>
                     <td>
                        <center>
                        <a data-toggle="modal" data-target="#modal_edit<?=$p->id_pertanyaan;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data"><i class="fa fa-pen"></i></a>
                        <a href="<?php echo site_url('Forms/hapusPertanyaan/'. $p->id_pertanyaan)?>" class="btn btn-danger btn-circle">
                        <i class="fa fa-trash"></i></a>
                     </td>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Grafik Pertanyaan</h1>
   </div>
   <div class="row">
      <!-- Bar Chart -->
      <div class="col-xl-6 col-lg-5">
         <div class="card shadow mb-4">
            <div class="card-body">
               <div class="chart-bar">
                  <canvas id="myBarChart"></canvas>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xl-6 col-lg-5">
         <p style="margin-top: 40px;">
            Google and Facebook buttons are available featuring each company's respective brand color. They are used on the user login and registration pages.google and Facebook buttons are available featuring each company's respective brand color. They are used on the user login and registration pages.
            You can create more custom buttons by adding a new color variable in the _variables.scss file and then using the Bootstrap button variant mixin to create a new style, as demonstrated in the _buttons.scss file.
         </p>
      </div>
   </div>
   <?php 
      foreach ($getPertanyaan as $p):         
      ?>
   <div class="modal fade" id="modal_edit<?php echo $p->id_pertanyaan ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                
      <div class="modal-dialog modal-lg" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Edit Pertanyaan</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-12">
                     <div class="p-20">
                        <form action="<?php echo site_url('Forms/updatePertanyaan'); ?>" method="post">
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Pertanyaan</label>
                              <input type="hidden" name="id_pertanyaan" value="<?php echo $p->id_pertanyaan; ?>">
                              <div class="col-10">
                                 <textarea class="form-control" name="pertanyaan" rows="5" ><?= $p->pertanyaan; ?></textarea>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-2 col-form-label">Deskripsi</label>
                              <div class="col-10">
                                 <textarea class="form-control" name="deskripsi" rows="5"><?= $p->deskripsi; ?></textarea>
                              </div>
                           </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-info" value="Update">
            </div>
            </form>
         </div>
      </div>
   </div>
</div>
</div>
        </div>
<?php endforeach; ?>
<?=
   $this->load->view('Template/footer');
   ?>
</div>