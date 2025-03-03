<?php

     namespace MVC\app\controllers;

     use MVC\app\models\Interests_model;

     class Interests_controller{
          
          public $model = [];

          function __construct(){
               $this->model = new Interests_model();
          }

          public function index(){
               $interests = $this->model->getInterests();
               require "MVC/app/views/my_interests.php";
          }
     }
?>