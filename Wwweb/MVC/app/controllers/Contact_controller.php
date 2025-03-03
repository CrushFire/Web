<?php
    
    namespace MVC\app\controllers;

    use MVC\app\models\Contact_model;

    class Contact_controller{

        public $model = [];

        function __construct(){
            $this->model = new Contact_model();
        }

        public function index(){
            $answer = $this->model->Validation();
            //extract(['answer' => $answer]);
            require "MVC/app/views/conatcts.php";
           // readfile("MVC/app/views/conatcts.php");
        }


    }
?>