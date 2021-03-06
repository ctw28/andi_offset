<?php 
include('../config/config.php');
include('../config/base-url.php');

$query  = "SELECT * FROM data_pribadi dp INNER JOIN data_lamaran dl WHERE dp.id_pelamar = dl.id_pelamar";
$hasil = mysqli_query($db, $query);

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Daftar Pelamar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
      ============================================ -->
      <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo.png">
    <!-- Google Fonts
      ============================================ -->
      <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
      ============================================ -->
      <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
      ============================================ -->
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/owl.theme.css">
      <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
      ============================================ -->
      <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
      ============================================ -->
      <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
      ============================================ -->
      <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
      ============================================ -->
      <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
      ============================================ -->
      <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
      ============================================ -->
      <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
      ============================================ -->
      <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
      <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
      ============================================ -->
      <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
      <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
      ============================================ -->
      <link rel="stylesheet" href="css/editor/select2.css">
      <link rel="stylesheet" href="css/editor/datetimepicker.css">
      <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
      <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
      ============================================ -->
      <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
      <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- modals CSS
        ============================================ -->
        <link rel="stylesheet" href="css/modals.css">
    <!-- style CSS
      ============================================ -->
      <link rel="stylesheet" href="css/style.css">
    <!-- responsive CSS
      ============================================ -->
      <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
      ============================================ -->
      <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="#"><img class="main-logo" src="img/logoandi.png" alt="" /></a>
                    <strong><img src="img/logo/logosn.png" alt="" /></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li>
                                <a href="<?= $baseUrl ?>/admin"><i class="fa big-icon fa-desktop icon-wrap"></i>
                                  <span class="mini-click-non">Dashboard</span>
                              </a>
                          </li>
                          <li>
                            <a href="<?= $baseUrl ?>admin/data-pelamar.php" aria-hidden="true"><i class="fa big-icon fa-table icon-wrap"></i>
                                <span class="mini-click-non">Daftar Pelamar</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                               <i class="fa fa-bars"></i>
                                           </button>
                                       </div>
                                   </div>
                                   <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                   </div>
                                   <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                    <div class="header-right-info">
                                        <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                 <i class="fa fa-user adminpro-user-rounded header-riht-inf" aria-hidden="true"></i>
                                                 <span class="admin-name">Administrator</span>
                                                 <i class="fa fa-angle-down adminpro-icon adminpro-down-arrow"></i>
                                             </a>
                                             <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="login.html"><span class="fa fa-lock author-log-ic"></span>Log Out</a>
                                                </li>
                                            </ul>
                                        </li>                                                
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu end -->
    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcome-list single-page-breadcome">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h1 style="color:white; text-align: center;">DAFTAR PELAMAR</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2019 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    <!-- jquery
      ============================================ -->
      <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
      ============================================ -->
      <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
      ============================================ -->
      <script src="js/wow.min.js"></script>
    <!-- price-slider JS
      ============================================ -->
      <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
      ============================================ -->
      <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
      ============================================ -->
      <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
      ============================================ -->
      <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
      ============================================ -->
      <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
      ============================================ -->
      <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
      ============================================ -->
      <script src="js/metisMenu/metisMenu.min.js"></script>
      <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
      ============================================ -->
      <script src="js/data-table/bootstrap-table.js"></script>
      <script src="js/data-table/tableExport.js"></script>
      <script src="js/data-table/data-table-active.js"></script>
      <script src="js/data-table/bootstrap-table-editable.js"></script>
      <script src="js/data-table/bootstrap-editable.js"></script>
      <script src="js/data-table/bootstrap-table-resizable.js"></script>
      <script src="js/data-table/colResizable-1.5.source.js"></script>
      <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
      ============================================ -->
      <script src="js/editable/jquery.mockjax.js"></script>
      <script src="js/editable/mock-active.js"></script>
      <script src="js/editable/select2.js"></script>
      <script src="js/editable/moment.min.js"></script>
      <script src="js/editable/bootstrap-datetimepicker.js"></script>
      <script src="js/editable/bootstrap-editable.js"></script>
      <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
      ============================================ -->
      <script src="js/chart/jquery.peity.min.js"></script>
      <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
      ============================================ -->
      <script src="js/tab.js"></script>
    <!-- plugins JS
      ============================================ -->
      <script src="js/plugins.js"></script>
    <!-- main JS
      ============================================ -->
      <script src="js/main.js"></script>


      <script>
        var idnya;
        $(document).ready(function(){
            $('.tombol_detail').on('click', function(){
                var btn = ($(this).attr('id'));
                idnya = btn;
                $.ajax({
                    url: "../detail.php?id="+btn,
                    type: "GET",
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        $("#tampil-detail-pribadi").text('');
                        $("#tampil-detail-pengalaman").text('');
                        $("#tampil-detail-pendidikan").text('');
                        $("#tampil-detail-keluarga").text('');
                        $("#tampil-detail-lamaran").text('');

                        var row = ['','Nama', 'Tempat Lahir', 'Tanggal Lahir', 'Jenis Kelamin','Alamat (KTP)','Alamat Domisili','No. Handphone','Email','Status','Nama Pasangan','Pekerjaan Pasangan','Tempat lahir Pasangan','Tanggal Lahir Pasangan','No. Telp Pasangan','Jumlah Anak', 'Pengalaman Kerja','Nama Perusahan','Bidang','Jabatan Terakhir','Lama Kerja (dalam Bulan)','Periode Kerja','Gaji Terakhir Anda','Alasan Keluar / Berhenti','Surat Keterangan Kerja','Nama Universitas', 'Jurusan', 'Tahun Masuk','Tahun Lulus','Nama Ayah', 'Usia Ayah', 'Pekerjaan Ayah', 'No Handphone Ayah', 'Status Ayah', 'Nama Ibu', 'Usia Ibu', 'Pekerjaan Ibu', 'No Handphone Ibu', 'Status Ibu', 'Jml Saudara', 'Posisi1', 'Posisi2', 'Penempatan', 'Gaji', 'Kekurangan', 'Kelebihan', 'Bisa Kendaraan', 'Punya Sim', 'Info Lowongan', 'Kenalan', 'Pekerjaan Sampingan', 'Nama Usaha', 'Tahun Mulai', 'Posisi Sampingan', 'Bidang Sampingan', 'Terlibat Kejahatan', 'Kebiasaan Disukai', 'Mulai Kerja', 'Keperluan Mendesak', 'Moody', 'Pengalaman Hidup'];
                        var rowColor = "";
                        for (var i = 1; i < 61; i++) {
                          if(i%2==0)
                            rowColor = '224,235,255';
                          else
                            rowColor = "";

                            if(i >= 1 && i < 16){
                            $("#tampil-detail-pribadi").append('<tr style="background-color:rgba('+rowColor+')"><td width="35%">'+row[i]+'</td><td width="5%"> : </td><td>'+ data[i]+'</td></tr>');                                
                            }
                            if(i >= 16 && i < 25){
                            $("#tampil-detail-pengalaman").append('<tr style="background-color:rgba('+rowColor+')"><td width="35%">'+row[i]+'</td><td width="5%"> : </td><td>'+ data[i]+'</td></tr>');                                
                            }
                            if(i >= 25 && i < 29){
                            $("#tampil-detail-pendidikan").append('<tr style="background-color:rgba('+rowColor+')"><td width="35%">'+row[i]+'</td><td width="5%"> : </td><td>'+ data[i]+'</td></tr>');                                
                            }                            
                            if(i >= 29 && i < 40){
                            $("#tampil-detail-keluarga").append('<tr style="background-color:rgba('+rowColor+')"><td width="35%">'+row[i]+'</td><td width="5%"> : </td><td>'+ data[i]+'</td></tr>');                                
                            }
                            if(i >= 40 && i < 61){
                            $("#tampil-detail-lamaran").append('<tr style="background-color:rgba('+rowColor+')"><td width="35%">'+row[i]+'</td><td width="5%"> : </td><td>'+ data[i]+'</td></tr>');                                
                            }
                        }
                    },
                    error: function(data){
                        console.log(data);
                        alert('ada kesalahan jaringan');
                    }
                });
            });
        });
        $('.status').on('click', function(){
            var status = ($(this).attr('id'));
            if(status=='hub'){
              statusnya='Sudah Dihubungi';
              labelnya='label label-success';
            }
            if(status=='terima'){
              statusnya='Diterima';
              labelnya='label label-primary';
            }
            if(status=='tolak'){
              statusnya='Ditolak';
              labelnya='label label-danger';
            }

            $.ajax({
                    url: "../status-change.php",
                    type: "POST",
                    data: {
                      id_pelamar: idnya,
                      status_lamaran : statusnya
                    },
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        $('#status'+idnya).removeClass();
                        $('#status'+idnya).addClass(labelnya);
                        $('#status'+idnya).text(statusnya);                        
                    },
                    error: function(data){
                        console.log(data);
                        alert('ada kesalahan jaringan');
                    }
                });
        });
        
    </script>
</body>

</html>
