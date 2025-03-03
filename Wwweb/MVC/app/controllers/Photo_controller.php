<?php

namespace MVC\app\controllers;

use MVC\app\models\Photo_model;

    class Photo_controller
    {
        
        public $model = [];
        
        function __construct()
        {
            $this->model = new Photo_model();
        }

        public function index() {
            $photos = $this->model->getAllPhotos();
            require 'MVC/app/views/foto.php';
        }
            // Метод для получения всех фото
        
        // function action_index()
        // {
        //     $data = $this->model->getAllPhotos();		
        //     $this->view->render('foto.php', $data);
        // }
    }
?>