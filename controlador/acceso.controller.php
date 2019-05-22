<?php
    require_once "modelo/usuario.php";

    class controlleracceso {
        
        public function __construct() {

        }

        public function index() {
            require_once "vista/acceso.index.php";
        }

        public function login() {
            
            session_start();
            
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                echo("2");
                if (isset($_POST["login"])){
                    echo("3");
                    $usuario = $_POST["login"];
                    $password = $_POST["password"];
                                 
                }
             
                $db = Database::getInstance();
             
                $db->query("SELECT * FROM usuarios WHERE dni=:usuario AND password=md5(:password);",
                                [":usuario" => $usuario,
                                 ":password" =>$password]);
                $resultado = $db->getRow();
                if ($resultado !== false) {
                    echo("4");
                    $_SESSION['usuario'] = $usuario;
                    require_once "vista/acceso.menu.php";
                    // header("Location: index.php?mod=index&ope=menu");
                }else{
                    echo("5");
                    require_once "vista/acceso.index.php";
                }
            }
        }

        public function logout() {
            
            session_start();
            $_SESSION=[];
            session_destroy();
            require_once "vista/acceso.index.php";
        }

        public function menu() {
            session_start();
            require_once "vista/acceso.menu.php";
        }


        // public function search() {
        //     $datos= usuario::obtenerUsuario();

        //     // $usuarios= new usuarios();
        //     // $datos= $usuarios->obtenerUsuario();
        //     // // (CONSEGUIR LOS DATOS DEL USUARIO EN CONCRETO)
        //     // $db->query("SELECT * FROM usuarios WHERE dni=:usuario;",
        //     //                     [":usuario" => $usuario]);
            
        //     require_once "vista/usuario.search.php";
        // }

        // public function crear(){
        //     if(isset($_GET["iden"])):
        //         $usuarios= new usuarios();
        //         $usuarios->setdni($_GET["iden"]);
        //         $usuarios->setnombre($_GET["nom"]);
        //         $usuarios->setapellidos($_GET["apl"]);
        //         $usuarios->setnacimiento($_GET["ncm"]);
        //         $usuarios->agregar();
        //         header("Location:index.php?mod=usuario&ope=index");
        //     else:
        //         require_once "vista/usuario.crear.php";
        //     endif;
        // }

        // public function delete() {
        //     if(isset($_GET["idUser"])) usuarios::deleteUsuarios($_GET["idUser"]);
        //     header("Location:search.php?mod=usuario&ope=search");
        // }

        // public function update() {

        //     $id = $_GET["idUser"]??"";

        //     if(!empty($id)):
                
        //         $usuarios = usuarios::obtenerUsuario($id);
                                    
        //         if(isset($_GET["iden"])):

        //             $usuarios->setdni($_GET["iden"]);
        //             $usuarios->setnombre($_GET["nom"]);
        //             $usuarios->setapellidos($_GET["apl"]);
        //             $usuarios->setnacimiento($_GET["ncm"]);
        //             $usuarios->update();
                    
        //             header("Location:index.php?mod=usuario&ope=search");
        //         else:
                    
        //             $dni = $usuarios->getdni() ;
        //             $nombre = $usuarios->getnombre() ;
        //             $apellidos = $usuarios->getapellidos() ;
        //             $nacimiento = $usuarios->getnacimiento() ;
        //             require_once "vista/usuario.update.php";
        //         endif;
        //     else:
        //         header("Location:index.php?mod=usuario&ope=search");
        //     endif;
        // }

        // public function usuarioConcreto() {
        //     $datos= historia_clinico::listadovariado();
        //     require_once "vista/usuario.informacion.php";
        // }

    }
?>