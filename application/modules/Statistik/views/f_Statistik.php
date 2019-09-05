<?php
   $this->load->view('Template/sideBar');
   ?>
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Statistik</h1>
   </div>
   <div class="row">
      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-5">
         <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">Grafik Kualtias Pelayanan</h6>
               <div class="dropdown no-arrow">
               </div>
            </div>
            <!-- Card Body -->
            <div class="card-body">
               <div class="chart-area">
                  <canvas id="myAreaChart"></canvas>
               </div>
            </div>
         </div>
      </div>
      <!-- Bar Chart -->
      <div class="col-xl-8 col-lg-5">
         <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Responden Berdasarka usia dan pendidikan</h6>
            </div>
            <div class="card-body">
               <div class="chart-bar">
                  <canvas id="myBarChart"></canvas>
               </div>
            </div>
         </div>
      </div>
      <!-- Pie Chart -->
      <div class="col-xl-4 col-lg-5">
         <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">Responden berdasarkan jenis kelamin</h6>
            </div>
            <div class="card-body">
               <div class="chart-pie pt-4 pb-2">
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
   </div>
</div>
</div>
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