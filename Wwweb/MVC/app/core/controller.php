<?php

namespace MVC\app\core;

class controller {
    // Метод для отображения представления (view)
    public function view($view, $data = []) {
        // Проверяем, существует ли файл представления
        $viewFile = 'MVC/app/views/' . $view . '.php';
        
        if (file_exists($viewFile)) {
            // Подключаем файл представления
            // Передаем данные в локальную переменную
            extract($data);
            require_once $viewFile;
        } else {
            // Если файл представления не найден, выводим ошибку
            echo "Ошибка: Представление $view не найдено.";
        }
    }

    // Метод для загрузки модели
    public function model($model) {
        // Формируем путь к файлу модели
        $model_file = 'MVC/app/models/' . $model . '.php';
        
        if (file_exists($model_file)) {
            // Подключаем модель
            require_once $model_file;
            // Создаем экземпляр модели
            return new $model();
        } else {
            // Если модель не найдена, выводим ошибку
            echo "Ошибка: Модель $model не найдена.";
            return null;
        }
    }
}
?>
