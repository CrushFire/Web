<?php
// Включение отображения ошибок

require_once __DIR__ . '/autoload.php';
// require_once __DIR__ . "\MVC\app\controllers\Photo_controller.php";

// require_once __DIR__ . "\MVC\app\models\\validators\Photo_model.php";

use MVC\app\controllers\Photo_controller;

use MVC\app\core\router;
// Создайте экземпляр контроллера

router::route();
?>
