<?php

namespace MVC\app\core;

use MVC\app\controllers\Photo_controller;

use MVC\app\controllers\Interests_controller;

use MVC\app\controllers\Contact_controller;
// Создайте экземпляр контроллера
// Создаем объект маршрутизатора

class router{
    static function route(){
        
        $con = new Photo_controller();
        $con1 = new Interests_controller();
        $val = new Contact_controller();
        
        //Берет URL
        $page = isset($_GET['page']) ? trim(htmlspecialchars($_GET['page'])) : 'Main_page';
        $routes = [
            "Main_page"     => "MVC/app/views/Main_page.html",
            "about_me"      => "MVC/app/views/about_me.html",
            "conatcts"      => "MVC/app/views/conatcts.php",
            "history"       => "MVC/app/views/history.html",
            "my_interests"  => "MVC/app/views/my_interests.php",
            "study"         => "MVC/app/views/study.html",
            "test"          => "MVC/app/views/test.html", // Подключаем PHP-страницу
            "foto"          => "MVC/app/views/foto.php"
        ];
        
        // Проверяем, существует ли файл, и подключаем его
        
        //Вызывает методы контроллеров
        switch ($page) {
            case 'Main_page':
                 // Вызов метода index() для главной страницы
                break;
            case 'foto':
                // Вызов другого метода контроллера, если необходимо
                $con->index(); // Предположим, у вас есть другой метод
                break;
            case 'about_me':
                break;
            case 'conatcts':
                $val->index();
                
                break;
            case 'history':
                break;
            case 'my_interests':
                $con1->index();
                break;
            case 'study':
                break;
            case 'test':
                break;
            // Добавьте другие случаи по мере необходимости
            default:
                require_once "pages/404.php"; // Страница 404 для несуществующих маршрутов
                break;
        }
        
        //Открывает страницу
        if (array_key_exists($page, $routes) && file_exists($routes[$page])) {
            require_once $routes[$page];
        } else {
            require_once "pages/404.php"; // Страница 404
        }
    }
}
?>