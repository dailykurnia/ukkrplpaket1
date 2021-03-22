<?php
$persen=0;
//$pbaru=$db->hitung_laporan("0")/$db->hitung_laporan("semua")*100;
//$pproses=$db->hitung_laporan("proses")/$db->hitung_laporan("semua")*100;
//$pselesai=$db->hitung_laporan("selesai")/$db->hitung_laporan("semua")*100;

?><section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
   <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Kelas</span>
                <span class="info-box-number">
                  <?php 
				//  echo $db->hitung_tabel("kelas");
					  ?> 
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data SPP</span>
                <span class="info-box-number"><?php 
				//  echo $db->hitung_tabel("spp");
					  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data siswa</span>
                <span class="info-box-number"><?php 
				//  echo $db->hitung_tabel("siswa");
					  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Petugas</span>
                <span class="info-box-number"><?php 
				 // echo $db->hitung_tabel("petugas");
					  ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
            
	 <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Grafik Pembayaran SPP</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                      <a href="#" class="dropdown-item">Another action</a>
                      <a href="#" class="dropdown-item">Something else here</a>
                      <a class="dropdown-divider"></a>
                      <a href="#" class="dropdown-item">Separated link</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Grafik</strong>
                    </p>

<!--					<div class="chart-responsive"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                      <canvas id="pieChart" height="83" width="166" class="chartjs-render-monitor" style="display: block; width: 166px; height: 83px;"></canvas>
                    </div>-->
					
                <div class="chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                         
 <canvas id="salesChart" height="180" style="height: 180px; display: block; width: 562px;" width="562" class="chartjs-render-monitor"></canvas> 
					</div> 
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Goal Completion</strong>
                    </p>

                    <div class="progress-group">
                      Laporan Baru
                      <span class="float-right"><b> <?php 
				 // echo $db->hitung_laporan("0")."</b>/".$db->hitung_laporan("semua");
					  ?></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-primary" style="width: <?php echo $pbaru; ?>%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                      Laporan Di proses
                      <span class="float-right"><b> <?php 
				 // echo $db->hitung_laporan("proses")."</b>/".$db->hitung_laporan("semua");
					  ?></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-danger" style="width: <?php echo $pproses; ?>%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Laporan Selesai</span>
                      <span class="float-right"><b> <?php 
				 // echo $db->hitung_laporan("selesai")."</b>/".$db->hitung_laporan("semua");
					  ?></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-success" style="width: <?php echo $pselesai; ?>%"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      Total Laporan
                      <span class="float-right"><b> <?php 
				//  echo  $db->hitung_laporan("semua");
					  ?></b></span>
                      <div class="progress progress-sm">
                        <div class="progress-bar bg-warning" style="width: 100%"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"> <?php// echo  round($pbaru,2); ?>%</span>
                      <h5 class="description-header"><?php // echo  $db->hitung_laporan("0"); ?></h5>
                      <span class="description-text">BARU</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-warning"> <?php// echo  round($pproses,2); ?>%</span>
                      <h5 class="description-header"><?php 
					  //echo  $db->hitung_laporan("proses"); ?></h5>
                      <span class="description-text">DIPROSES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span class="description-percentage text-success"> <?php// echo  round($pselesai,2); ?>%</span>
                      <h5 class="description-header"><?php //echo  $db->hitung_laporan("selesai"); ?></h5>
                      <span class="description-text">SELESAI</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-danger"> 100%</span>
                      <h5 class="description-header"><?php //echo  $db->hitung_laporan("semua"); ?></h5>
                      <span class="description-text">TOTAL</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
             <!-- /.card -->
            <div class="row">
              <div class="col-md-6">
                <!-- DIRECT CHAT -->
                 <!--/.direct-chat -->
              </div>
              <!-- /.col -->

              <div class="col-md-6">
                <!-- USERS LIST -->
                 <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
             <!-- /.card -->
          </div>
          <!-- /.col -->

           <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>