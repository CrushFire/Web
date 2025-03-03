<?php
    namespace MVC\app\models;

    class Contact_model{
        public $name;
        public $email;
        public $phone;
        public $age;
        public $date;
        public $message;

        public $answer;

        public function Validation(){

                $answer = ["", "", "", "", "", ""];
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
                return $answer; // Если ни одно поле не найдено
        }
            
            
    // Валидация имени
        private function valid_name($data) {
            if (empty($data)) {
                $answer[0] = "Имя не может быть пустым.";
            }
            if (!preg_match("/^[a-zA-Zа-яА-ЯёЁ\s]+$/u", $data)) {
                $answer[0] = "Имя должно содержать только буквы.";
            }
            else{
                $answer[0] = "";
            }
        }

        // Валидация email
        private function valid_email($data) {
            if (empty($data)) {
                $answer[1] = "Электронная почта не может быть пустой.";
            }
            if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                $answer[1] = "Неверный формат электронной почты.";
            }
            else{
                $answer[1] = "";
            }
        }

        // Валидация телефона
        private function valid_phone($data) {
            if (empty($data)) {
                $answer[2] = "Телефон не может быть пустым.";
            }
            // Можно добавить регулярное выражение для проверки формата номера
            if (!preg_match("/^[0-9\-\+]{10,15}$/", $data)) {
                $answer[2] = "Неверный формат телефона.";
            }
            else{
                $answer[2] = "";
            }
        }

        // Валидация возраста
        private function valid_age($data) {
            if (empty($data)) {
                $answer[3] = "Возраст не может быть пустым.";
            }
            if (!is_numeric($data) || $data < 0 || $data > 150) {
                $answer[3] = "Возраст должен быть числом и в пределах от 0 до 150.";
            }
            else{
                $answer[3] = "";
            }
        }

        // Валидация даты
        private function valid_date($data) {
            if (empty($data)) {
                $answer[4] = "Дата не может быть пустой.";
            }
            $date = DateTime::createFromFormat('Y-m-d', $data);
            if (!$date || $date->format('Y-m-d') !== $data) {
                $answer[4] = "Неверный формат даты. Используйте формат YYYY-MM-DD.";
            }
            else{
                $answer[4] = "";
            }
        }

        // Валидация сообщения
        private function valid_message($data) {
            if (empty($data)) {
                $answer[5] = "Сообщение не может быть пустым.";
            }
            if (strlen($data) > 500) {
                $answer[5] = "Сообщение не должно превышать 500 символов.";
            }
            else{
                $answer[5] = "";
            }
        }
    } 
        
?>