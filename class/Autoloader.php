<?php
    namespace App;
    
    class Autoloader{

        /**
         * Enregistre notre autoloader
         *
         * @return void
         */
        static function register(){
            spl_autoload_register([__CLASS__,'autoload']);
        }

        /**
         * inclure le fichier correspondant à la classe appelée
         *
         * @param [type] $class
         * @return void
         */
        static function autoload($class){
            if(strpos($class,__NAMESPACE__."\\") === 0)
            {
                $class = str_replace(__NAMESPACE__."\\",'',$class);
                $class = str_replace('\\','/',$class);
                require_once "class/".$class.".php";
            }
        }

    }

?>