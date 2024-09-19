<?php
    namespace App;
    class Form{

        private $data;

        public $surround = 'p';

        public function __construct($data = []){
            $this->data = $data;
        }

        private function surround($html){
            return "<".$this->surround.">".$html."</".$this->surround.">";
        }

            // if(isset($this->data[$index]))
            // {
            //     return $this->data[$index];
            // }else{
            //     return null;
            // }

        private function getValue($index){
            return isset($this->data[$index]) ? $this->data[$index] : null;
        }

        public function input($name, $type = "text"){
            return $this->surround("<input type='".$type."' name='".$name."' value='".$this->getValue($name)."'>");
        }

        public function submit($message = "Envoyer"){
            return $this->surround("<button type='submit'>".$message."</button>");
        }



    }
?>