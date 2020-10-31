<?php 
            $nilaiY=$_POST['nilaiY']; 
            $nilaiX=$_POST['nilaiX'];
            
            $ratay =array_sum($nilaiY);
           
           $tot = 0;
            $hasilVariant=0;
           //$stdevx = Stand_Deviation($nilaiX);
           // $stdevy= Stand_Deviation($nilaiY);
            $output = '';
            $CovarintS =0;
           // $angkaacak = rand(3,98);
            $bilacak = [10,24,3,32,23,59,95,34,34,51,8,48,66,97,3,96,46,74,77,44];
            $totalSimulasi=0;
            $goyang = 0;
            $kompor = 100;
            $koli = 0;
            $mak =0;
            $hasil2 = "";
           // print_r($nilaiY);
           // die();
            for($i=0;$i<COUNT($nilaiY);$i++)
            {
                
                $covariantY= $nilaiY[$i]/$ratay;
                $mak =$mak +$covariantY;
                $wad =$mak*$kompor;
                $eks = $covariantY*$nilaiX[$i] ;
                $koli = $koli +$eks;
                $nilaiInterval = explode("|", Interval_value($wad));
               
                $tot++;
                $output .= '<tr>
                        <td>'.$tot.' </td>
                        <td>'.$nilaiX[$i].'</td>
                         <td>'.$nilaiY[$i].'/'.$ratay.'='.$covariantY.'</td> 
                         <td>'.$mak.'</td> 
                         <td>'.$nilaiInterval[0].'</td>   
                     </tr>' ;
           
            }

            $header_data = 'Ekspektasi : '.$koli; 
            $hari = 1;
            for ($c=0; $c<COUNT($bilacak); $c++)      
            {
                $nilaiSimulasi = explode("|", Interval_value($bilacak[$c]));
                $totalSimulasi += $nilaiSimulasi[1];
                $hasilu = $totalSimulasi/2;
                $hasilu2 = $hasilu/10;
                $hasil2 .= '<tr>
                        <td>'.$hari.' </td>
                        <td>'.$bilacak[$c].'</td>
                         <td>'.$nilaiSimulasi[1].'</td> 
                     </tr>' ;
                $hasil_total = '<tr>
                  <td></td>
                  <td>Total</td>
                  <td>'.$totalSimulasi.'</td>
                </tr>';
                
                $hari++;
                $dalik ='
                Rata-Rata Penjualan Dispenser/Mingguan : '.$hasilu2;
            }    
                        
            ?>

<?php
function Stand_Deviation($goyang) 
    { 
    switch ($goyang)
          {
          case($goyang > 5):
          
          echo "Kategori Nilai A";
          break;
          case($goyang > 10):
          echo "Kategori Nilai B";
          break;
          case($goyang > 20):
          echo "Kategori Nilai C";
          break;
          case($array > 30):
          echo "Kategori Nilai D";
          break;
          case($array >= $wad ):
          echo "Kategori Nilai E";
          break;
          default:
          echo "Nilai diluar kategori";
          break;
          
        }
        

    } 


    function Interval_value($nilai)
    {
       if($nilai > 1 && $nilai < 13)
       {
          $value = "01-12|4";
       }elseif($nilai > 12 && $nilai < 23)
       {
           $value = "13-22|5";
       }elseif($nilai > 22 && $nilai < 41)
       {
           $value = "23-40|6";
       }elseif($nilai > 40  && $nilai < 65)
       {
           $value = "41-64|7";
       }elseif($nilai > 64 && $nilai < 81)
       {
           $value = "65-80|8";
       }elseif($nilai > 80 && $nilai < 95)
       {
           $value = "81-94|9";
       }elseif($nilai > 94 && $nilai <= 100)
       {
           $value = "95-100|10";
       }
       else
       {
           $value = "UNKNOW|11";
       }

      return $value;
    }




    ?>

    

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIMULASI MONTECALRO</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jsGrid -->
  <link rel="stylesheet" href="asset/AdminLTE/plugins/jsgrid/jsgrid.min.css">
  <link rel="stylesheet" href="asset/AdminLTE/plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/AdminLTE/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <div align="Center" >
      <span class="btn btn-primary btn-block">Menu_BAR</span></div>

    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/hen5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Hendri Guna</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Administrator
                
              </p>
            </a>
          </li>
          
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                SIMULASI MONTECARLO
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="soal2data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONTOH SOAL 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="soal3data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONTOH SOAL 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="soal1data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SOAL 1</p>
                </a>
              </li>
              

          
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6" align="center">
            <h1>TABLE INTERFAL BILANGAN ACAK</h1>
            
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="card">
        <div class="card-header" >
          <h3 class="card-title">TABLE INTERFAL BILANGAN ACAK</h3>
    
          
        </div>
        <!-- /.card-header -->
        <div class="card-body">
         <table id="example2" class="table table-bordered table-hover">
          <thead>
                <tr>
                  <th>NO</th>
                  <th>VARIABLE PERMINTAAN</th>
                  <th>PROBALITAS</th>
                  <th>KUMULATIF PROBALITAS</th>
                  <th>INTERFALL</th>

            </tr>
              <?php echo $output; ?>
              <td colspan="4"> <center> <?php echo $header_data; ?></center><td>
                
                </thead>
              </table>
        </div>
        <section class="content">
      <div class="card">
        <div class="card-header" >
          <h3 class="card-title">TABLE SIMULASI KEBUTUHAN DISPENSER</h3>
    
          
        </div>
        <div class="card-body">
         <table id="example2" class="table table-bordered table-hover">
          <thead>
                <tr>
                   <th>HARI</th>
                  <th>BILANGAN ACAK</th>
                  <th>SIMULASI</th>

            </tr>
               <?php echo $hasil2; ?>
               <?php echo $hasil_total; ?>
               <td colspan="4"> <center> <?php echo $dalik; ?></center></td>
                              
                </thead>

              </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="asset/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jsGrid -->
<script src="asset/AdminLTE/plugins/jsgrid/demos/db.js"></script>
<script src="asset/AdminLTE/plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="asset/AdminLTE/dist/js/demo.js"></script>
<!-- page script -->
 
        

</body>
</html>


