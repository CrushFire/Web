<?php

namespace MVC\app\core;

// Базовый класс представления
class view{
    // Метод для отображения представления (view)
    public function render($view, $data = []) {
        // Проверяем, существует ли файл представления
        $view_file = 'MVC/app/views/' . $view . '.php';
        
        if (file_exists($view_file)) {
            // Подключаем файл представления
            // Передаем данные в локальные переменные
            extract($data);  // Разворачивает массив данных в отдельные переменные
            require_once $view_file;
        } else {
            // Если файл представления не найден, выводим ошибку
            echo "Ошибка: Представление '$view' не найдено.";
        }
    }
}
?>
