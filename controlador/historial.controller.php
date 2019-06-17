<?php
    require_once "modelo/historial.php";

    class controllerhistorial {
        
        public function __construct() {

        }

        public function visual() {
           $datos= historial::historico();
           require_once "vista/historial.paciente.php";
        }


        public function historia() {

            $id = $_GET["idUser"];

            if(!empty($id)):
                
                $historia = historia::obtenerHistoria($id);
                                    
                if(isset($_GET["iden"])):
                    echo $iden;
                    $historia->setdni($_GET["iden"]);
                    $historia->setnombre($_GET["nom"]);
                    $historia->setapellidos($_GET["apl"]);
                    $historia->setnacimiento($_GET["ncm"]);
                    $historia->update();

                    header("Location:index.php?mod=usuario&ope=search");
                else:
                    
                    $dni = $historia->getdni() ;
                    $nombre = $historia->getnombre() ;
                    $apellidos = $historia->getapellidos() ;
                    $nacimiento = $historia->getnacimiento() ;
                    require_once "vista/usuario.update.php";
                endif;
            else:
                header("Location:index.php?mod=historial&ope=");
            endif;
        }
    }