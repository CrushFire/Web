<?php
    
    namespace MVC\app\models\validators;

    class Valid_contact{

        public $answer;

            function takeType(){
                if (isset($_POST["name"])) {
                    // Валидация поля "name"
                    valid_name($_POST["name"]);
                }
                if (isset($_POST["email"])) {
                    // Валидация поля "email"
                    valid_email($_POST["email"]);
                }
                if (isset($_POST["phone"])) {
                    // Валидация поля "phone"
                    valid_phone($_POST["phone"]);
                }
                if (isset($_POST["age"])) {
                    // Валидация поля "age"
                    valid_age($_POST["age"]);
                }
                if (isset($_POST["date"])) {
                    // Валидация поля "date"
                    valid_date($_POST["date"]);
                }
                if (isset($_POST["message"])) {
                    // Валидация поля "message"
                    valid_message($_POST["message"]);
                }
                return null; // Если ни одно поле не найдено
            }
            
    // Валидация имени
private function valid_name($data) {
    if (empty($data)) {
        $answer = "Имя не может быть пустым.";
    }
    if (!preg_match("/^[a-zA-Zа-яА-ЯёЁ\s]+$/u", $data)) {
        $answer = "Имя должно содержать только буквы.";
    }
    return true;  // Если валидация прошла успешно
}

// Валидация email
private function valid_email($data) {
    if (empty($data)) {
        $answer = "Электронная почта не может быть пустой.";
    }
    if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        $answer = "Неверный формат электронной почты.";
    }
    return true;  // Если валидация прошла успешно
}

// Валидация телефона
private function valid_phone($data) {
    if (empty($data)) {
        $answer = "Телефон не может быть пустым.";
    }
    // Можно добавить регулярное выражение для проверки формата номера
    if (!preg_match("/^[0-9\-\+]{10,15}$/", $data)) {
        $answer = "Неверный формат телефона.";
    }
    return true;  // Если валидация прошла успешно
}

// Валидация возраста
private function valid_age($data) {
    if (empty($data)) {
        $answer = "Возраст не может быть пустым.";
    }
    if (!is_numeric($data) || $data < 0 || $data > 150) {
        $answer = "Возраст должен быть числом и в пределах от 0 до 150.";
    }
    return true;  // Если валидация прошла успешно
}

// Валидация даты
private function valid_date($data) {
    if (empty($data)) {
        $answer = "Дата не может быть пустой.";
    }
    $date = DateTime::createFromFormat('Y-m-d', $data);
    if (!$date || $date->format('Y-m-d') !== $data) {
        $answer = "Неверный формат даты. Используйте формат YYYY-MM-DD.";
    }
    return true;  // Если валидация прошла успешно
}

// Валидация сообщения
private function valid_message($data) {
    if (empty($data)) {
        $answer = "Сообщение не может быть пустым.";
    }
    if (strlen($data) > 500) {
        $answer = "Сообщение не должно превышать 500 символов.";
    }
    return true;  // Если валидация прошла успешно
}   

}