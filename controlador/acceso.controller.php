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
                if (isset($_POST["login"])){
                    $usuario = $_POST["login"];
                    $password = MD5($_POST["password"]);
                }
                
                

                $db = Database::getInstance();
             
                $db->query("SELECT * FROM usuarios WHERE dni=:usuario AND password=:password;",
                                [":usuario" => $usuario,
                                 ":password" =>$password]);
                
                $resultado = $db->getRow("usuarios");

                if ($resultado !== false) {
                    $_SESSION['usuario'] = $resultado;
                    
                    require_once "vista/acceso.menu.php";
                }else{
                    require_once "vista/acceso.index.php";
                    echo "Usuario o contraseña erroneos";
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



    }
?>