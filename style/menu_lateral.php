<!DOCTYPE html>
<html lang="es">
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
    <script type="text/javascript">
        function startTime() {
            var today = new Date();
            var hr = today.getHours();
            var min = today.getMinutes();
            var sec = today.getSeconds();
            //Add a zero in front of numbers<10
            min = checkTime(min);
            sec = checkTime(sec);
            document.getElementById("clock").innerHTML = "Son las " + hr + " : " + min + " : " + sec;
            var time = setTimeout(function(){ startTime() }, 500);
        }
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    </script>
</head>

<body class="nav-md" onload="startTime()">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
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
                                    <li><a href="index.php?mod=usuario&ope=crear"><i class="fa fa-edit"></i> Nuevo Usuario</a></li>
                                    <li><a href="index.php?mod=usuario&ope=update"><i class="glyphicon glyphicon-erase"></i> Editar Datos</a></li>
                                    <li><a href="index.php?mod=historial&ope=visual"><i class="fa fa-file-word-o"></i> Historial</a></li>
                                    <li><a href="index.php?mod=usuario&ope=cita"><i class="fa fa-calendar"></i> Citas</a></li>
                                    <li><a href="index.php?mod=acceso&ope=logout"><i class="fa fa-power-off"></i> Cierre de sesi&oacuten</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>