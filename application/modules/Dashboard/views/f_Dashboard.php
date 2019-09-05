<?php
   $this->load->view('Template/sideBar');
   ?>
<div class="container-fluid">
   
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   </div>
   <div class="row">
      
      <div class="col-md-4 mb-4">
         <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Responden</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $totalResponden ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-users fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="col-md-4 mb-4">
         <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Penilaian</div>
                     <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $totalPenilaian->bobot; ?></div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="col-md-4 mb-4">
         <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
               <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                     <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Rata-Rata Penilaian</div>
                     <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                           <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= round($rataPenilaian->bobot); ?></div>
                        </div>
                        <div class="col">
                           <div class="progress progress-sm mr-2">
                              <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-auto">
                     <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">

         <div class="col-xl-8 col-lg-5">
            <div class="card shadow mb-4">
               <div class="card-body">
                  <div class="chart-bar">
                     <canvas id="myBarChart"></canvas>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
               <div class="card-body">
                  <div class="chart-pie pt-2 pb-2">
                     <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-4 text-center small">
                     <span class="mr-2">
                     <i class="fas fa-circle text-success"></i> Pria
                     </span>
                     <span class="mr-2">
                     <i class="fas fa-circle text-primary"></i> Wanita
                     </span>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-12 col-lg-5">
            <div class="card shadow mb-4">
               <div class="card-body">
                  <div class="chart-area">
                     <canvas id="myAreaChart"></canvas>
                  </div>
               </div>
            </div>
         </div>
         
      </div>
   </div>
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Responden Terakhir</h1>
   </div>
   <div class="card shadow mb-4">
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead>
                  <tr>
                     <th>
                        <center>
                        Usia
                     </th>
                     <th>
                        <center>
                        Jenis Kelamin
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                     foreach ($responTerakhir as $r){
                     ?>
                  <tr>
                     <td>
                        <center>
                        <?= $r->usia; ?>
                     </td>
                     <td>
                        <center>
                        <?= $r->jenis_kelamin ?>
                     </td>
                  </tr>
                  <?php } ?>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<!-- /.container-fluid -->
<?=
   $this->load->view('Template/footer');
   ?>
<?=
   $this->load->view('Template/grafikJenisKelamin');
   ?>
<?=
   $this->load->view('Template/grafikUsia');
   ?>
</div>