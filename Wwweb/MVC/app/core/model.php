<?php

namespace MVC\app\core;

// Базовый класс модели
class model {
    // Свойства модели (для хранения данных)
    protected $data = [];

    // Метод для установки данных
    public function setData($key, $value) {
        $this->data[$key] = $value;
    }

    // Метод для получения данных
    public function getData($key) {
        return isset($this->data[$key]) ? $this->data[$key] : null;
    }

    // Метод для получения всех данных
    public function getAllData() {
        return $this->data;
    }

    // Метод для очистки данных
    public function clearData() {
        $this->data = [];
    }
}
?>
