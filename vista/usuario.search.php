<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="style/img/icon_Embarazada.ico">
    <title>Mis Matronas</title>
    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="containerDos">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <!-- Menú lateral -->
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><img src="style/img/icon_Embarazada.ico"> <span>Mis Matronas</span></a>
            </div>
            <div class="clearfix"></div>
            <br/>           
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div div="containerDos">  
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php?mod=acceso&ope=menu"><i class="fa fa-home"></i> Inicio</a></li>
                  <li><a href="index.php?mod=usuario&ope=search"><i class="fa fa-user"></i> Usuario</a></li>
                  <li><a><i class="fa fa-edit"></i> Nuevo Usuario</a></li>
                  <li><a><i class="fa fa-file-word-o"></i> Historial</a></li>
                  <li><a><i class="fa fa-calendar"></i> Citas</a></li>
                  <li><a href="index.php?mod=acceso&ope=logout"><i class="fa fa-power-off"></i> Cierre de sesi&oacuten</a></li>
                </ul>
                </div>
            </div> 
            </div>
          </div>
        </div>
        <!-- Final Menú lateral -->
        <!-- cabecera página -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
            </nav>
          </div>
        </div>
        <!-- Final cabecera página -->
        <!-- page content -->
          <div class="">
        <div class="right_col" role="main">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>DNI</th>
                          <th>Nombre y apellidos</th>
                          <th>Fecha Nacimiento</th>
                          <th>Direcci&oacuten</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($datos as $item) { ?>
                          <tr>
                            <td><?=$item->getIdUser()?></td>
                              <td><?=$item->getdni()?></td>
                              <td><a href="index.php?mod=usuario&ope=historiaClinica&idUser=<?=$item->getIdUser();?>"><?=$item->getnombre();?> <?=$item->getapellidos()?> </a></td>
                              <td><?=$item->getnacimiento()?></td>
                              <td><?=$item->getdireccion()?></td>
                              <td><a href="index.php?mod=usuario&ope=update&idUser=<?=$item->getIdUser();?>"><!-- <img src="style/img/editar.gif"> --> Editar</a></td>
                              <td><a href="index.php?mod=usuario&ope=delete&idUser=<?=$item->getIdUser();?>"><!-- <img src="style/img/eliminar.svg"> --> Eliminar</a></td>
                          </tr>
                          <?php
                              }
                          ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

    <!-- jQuery -->
    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

  </body>
</html>