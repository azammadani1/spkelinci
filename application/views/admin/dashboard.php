          <link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

          <style>
            span{
              font-family:'Quicksand', 'sans-serif';
            }
            h3{
              font-family:'Quicksand', 'sans-serif';
            }
            small{
              font-family:'Quicksand', 'sans-serif';
            }
            .count{
              font-family:'Quicksand', 'sans-serif';
            }
            .nav-md ul.nav.child_menu li:before {
              background: #3498DB;
              bottom: auto;
              content: "";
              height: 8px;
              left: 23px;
              margin-top: 15px;
              position: absolute;
              right: auto;
              width: 8px;
              z-index: 1;
              border-radius: 80%;
            }
            .glyphicon-off:before {
              content: "\e017";
              color: red;
            }
          </style>
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
              <div class="count"><?php echo count($jumlah_users) ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Total Kelompok Gejala</span>
              <div class="count"><?php echo count($jumlah_kelompok_gejala) ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Gejala</span>
              <div class="count blue"><?php echo count($jumlah_gejala) ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Penyakit</span>
              <div class="count"><?php echo count($jumlah_penyakit) ?></div>
            </div>
            <!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Data Nilai CF</span>
              <div class="count">33</div>
            </div> -->
           <!--  <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Hasil Diagnosa</span>
              <!-- <div class="count" data-end=" <?php echo count($jumlah_hasil); ?> "></div> -->
              <!-- <div class="count">20</div> -->
            <!-- </div> -->
          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3><b>SISTEM PAKAR</b><br><small>Diagnosa Awal Penyakit Pada Hewan Kelinci</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                
                <div class="col-md-12 col-sm-12 col-xs-6">
                  <div class="x_title">
                    <span style="font-size: 14px;"><b>Sistem Pakar Penyakit Hewan Kelinci</b> adalah diagnosa penyakit yang dilakukan pada hewan. Sistem Pakar ini dapat membantu masyarakat khususnya pecinta hewan untuk mendiagnosa penyakit hewan kesayangan. Sistem Pakar Ini dibangun dengan metode <b>Forward Chaining sebagai penarik kesimpulan,</b> kemudian menggunakan metode <b>Certainty Factor sebagai perhitungan kepercayaan</b> sehingga meningkatkan keakuratan diagnosa pada penyakit hewan. </span>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                   
                    
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    
                    <div>
                      
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          </div>