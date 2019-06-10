<?php
    require_once "modelo/usuario.php";

    class controllerusuario {
        
        public function __construct() {

        }

        public function search() {
           $datos= usuarios::listado();
           require_once "vista/usuario.search.php";
        }

        public function crear(){
            if(isset($_GET["iden"])):
                $usuarios= new usuarios();
                $usuarios->setdni($_GET["iden"]);
                $usuarios->setnombre($_GET["nom"]);
                $usuarios->setapellidos($_GET["apl"]);
                $usuarios->setnacimiento($_GET["ncm"]);
                $usuarios->settipoUser($_GET["tpu"]);
                $usuarios->setpassword($_GET["psw"]);
                $usuarios->settelefono($_GET["tlf"]);
                $usuarios->setmail($_GET["mail"]);
                $usuarios->setdireccion($_GET["drc"]);
                $usuarios->agregar();
                header("Location:index.php?mod=usuario&ope=crear");
            else:
                require_once "vista/usuario.crear.php";
            endif;
        }

        public function delete() {
            if(isset($_GET["idUser"])) usuarios::deleteUsuarios($_GET["idUser"]);
            header("Location:index.php?mod=usuario&ope=search");
        }

        public function update() {

            $id = $_GET["idUser"];

            if(!empty($id)):
                
                $usuarios = usuarios::obtenerUsuario($id);
                                    
                if(isset($_GET["iden"])):
                    echo $iden;
                    $usuarios->setdni($_GET["iden"]);
                    $usuarios->setnombre($_GET["nom"]);
                    $usuarios->setapellidos($_GET["apl"]);
                    $usuarios->setnacimiento($_GET["ncm"]);
                    $usuarios->setdireccion($_GET["drc"]);
                    $usuarios->settipoUser($_GET["tpu"]);
                    $usuarios->settelefono($_GET["tlf"]);
                    $usuarios->setmail($_GET["mail"]);
                    $usuarios->update();

                    header("Location:index.php?mod=usuario&ope=search");
                else:
                    
                    $dni = $usuarios->getdni() ;
                    $nombre = $usuarios->getnombre() ;
                    $apellidos = $usuarios->getapellidos() ;
                    $nacimiento = $usuarios->getnacimiento() ;
                    $direccion = $usuarios->getdireccion() ;
                    $tipoUser = $usuarios->gettipoUser() ;
                    $telefono = $usuarios->gettelefono() ;
                    $mail = $usuarios->getmail() ;
                    require_once "vista/usuario.update.php";
                endif;
            else:
                header("Location:index.php?mod=usuario&ope=index");
            endif;
        }

        public function usuarioConcreto() {
            $datos= historia_clinico::listadovariado();
            require_once "vista/usuario.informacion.php";
        }

    }