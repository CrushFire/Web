<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="http://localhost:3000/MVC/Front/Css/Styles.css">
    <title>Контакты</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
</style>
<html>
<header>
    <div style="border: solid; color: rgb(0, 0, 0); height: 19mm;">
        <div id="top" style="margin-top: 5mm;">
            <a href=about_me.html class="left">
                Обо мне
            </a>
            <div style="float:inline-start" class="General_menu">
            <a href=my_interests.html class="left">
                Мои интересы
            </a>
            <div style="background-color:whitesmoke;" class="Menu">
                <ul>
                <li>
                <a style="color:red;" href="my_interests.html#music">Музыка</a>
                </li>
                <li>
                <a style="color:orange" href="my_interests.html#book">Книги</a>
                </li>
                <li>
                <a  style="color:yellowgreen" href="my_interests.html#anime">Аниме</a>
                </li>
                </ul>
            </div>
            </div>
            <a href=study.html class="left">
                Учеба
            </a>
            <div style="float:inline-end; margin-right: 5mm;" id="dateTime">
                
            </div>
            <div style="float:right; margin-right: 5mm;">
                <a href=foto.html class="right">
                    Фотоальбом
                </a>
                <a href=Main_page.html class="right">
                    Главное меню
                </a>
                <a href=test.html class="right">
                    Тест
                </a>
                <a href="history.html" class="right">
                    История
                </a>
            </div>
        </div>
    </div>
</header>

<body>
    <div style="height: 250mm; width: 150mm; margin-left: 100mm;" class="border">
        <h2 style="margin-left: 10mm;">Обратная связь</h2>
        <div style="margin-left: 10mm; color: rgb(27, 27, 111)">Если у вас есть пожелания по улучшению этого сайта, заполните данную форму</div>
        <form id="survey-form">
          
    <!-- Фамилия, имя, отчество -->
    <div style="margin-top: 5mm;" id="name-container">
        <label id="name-label" for="name">
            <form id="valid-form" action="Contact_controller.php" method="POST">
            <label>ФИО:</label>
            <input type="text" name="name" placeholder="Введите своё имя" value="<?php echo $_POST['name'] ?? ''; ?>">
            <span class="error"><?php echo $answer[0] ?? ''; ?></span>

            <label>Email:</label>
            <input type="email" name="email" placeholder="Введите свою почту" value="<?php echo $_POST['email'] ?? ''; ?>">
            <span class="error"><?php echo $answer[1] ?? ''; ?></span>

            <label>Телефон:</label>
            <input type="text" name="phone" placeholder="Введите свой номер телефона" value="<?php echo $_POST['phone'] ?? ''; ?>">
            <span class="error"><?php echo $answer[2] ?? ''; ?></span>

            <label>Возраст:</label>
            <input type="number" name="age" min="0" max="150" placeholder="Введите свой возраст" value="<?php echo $_POST['age'] ?? ''; ?>">
            <span class="error"><?php echo $answer[3] ?? ''; ?></span>

            <label>Дата рождения:</label>
            <input type="date" name="date" value="<?php echo $_POST['date'] ?? ''; ?>">
            <span class="error"><?php echo $answer[4] ?? ''; ?></span>

            <label>Пол:</label>
            <div>
                <label><input type="radio" name="gender" value="male" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'male') ? 'checked' : ''; ?>> Мужской</label>
                <label><input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?>> Женский</label>
            </div>

            <label>Сообщение:</label>
            <textarea name="message" placeholder="Введите ваше сообщение"><?php echo $_POST['message'] ?? ''; ?></textarea>
            <span class="error"><?php echo $answer[5] ?? ''; ?></span>

            <button type="submit">Отправить</button>
            <button type="reset">Очистить</button>
        </form>


      </div>
</body>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\dateTime.js"></script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\historyPage.js"></script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\Front\Js\jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src=’https://unpkg.com/vue@next”></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- <script>
        // Отслеживаем изменение значения в поле
        document.getElementsById().addEventListener('valid-form', function() {
        var name = document.getElementByTagName('input').value;

        // Создаем скрытое поле для передачи данных в POST
        var inputField = document.createElement('input');
        inputField.type = 'hidden';
        inputField.input = 'input';
        inputField.value = name;

        // Добавляем это поле в форму
        form.appendChild(inputField);

        // Отправляем форму
        form.submit();
        });
</script> -->

<!-- </html>

<form id="valid-form" action="Contact_controller.php" method="POST">
            <span class="label-text">Фамилия Имя Отчество</span>
            <input id="name" name="name" type="text" placeholder="Введите своё имя"
                <?= isset($answer) ? $answer: ''; ?>
                   required />
            </form>
                   
        </label>
        <?php if (isset($errors['name'])): ?>
            <div style="color: red; font-size: 12px;"><?php echo $errors['name']; ?></div>
        <?php endif; ?>
    </div>

    <div class="input-container" id="email-container">
        <label id="email-label" for="email">
            <span class="label-text">Электронная почта</span>
            <input id="email" name="email" type="email" placeholder="Введите свою почту" 
                   value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"
                   class="<?php echo isset($errors['email']) ? 'error' : ''; ?>" 
                   required />
        </label>
        <?php if (isset($errors['email'])): ?>
            <div style="color: red; font-size: 12px;"><?php echo $errors['email']; ?></div>
        <?php endif; ?>
    </div>

    <div class="input-container" id="number-container">
        <label id="number-label" for="number">
            <span class="label-text">Телефон</span>
            <input id="number" name="phone" type="text" placeholder="Введите свой номер телефона" 
                   value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : ''; ?>" 
                   class="<?php echo isset($errors['phone']) ? 'error' : ''; ?>" 
                   required />
        </label>
        <?php if (isset($errors['phone'])): ?>
            <div style="color: red; font-size: 12px;"><?php echo $errors['phone']; ?></div>
        <?php endif; ?>
    </div>

    <div class="input-container" id="age-container">
        <label id="age-label" for="age">
            <span class="label-text">Возраст</span>
            <input id="age" name="age" type="number" min="0" max="150" placeholder="Введите свой возраст" 
                   value="<?php echo isset($_POST['age']) ? $_POST['age'] : ''; ?>" 
                   class="<?php echo isset($errors['age']) ? 'error' : ''; ?>" 
                   required />
        </label>
        <?php if (isset($errors['age'])): ?>
            <div style="color: red; font-size: 12px;"><?php echo $errors['age']; ?></div>
        <?php endif; ?>
    </div>

    <div id="myboxes">
            <label>Пол</label>
            <div>
              <label class="check"><input type="radio" name="conditions"  class="radios" value="male"/> Мужской</label>
              <label class="check"><input type="radio" class="radios" name="conditions" value="female"/> Женский</label>
            </div>
          </div>

    <div class="input-container" id="date-container">
        <label id="date-label" for="date">
            <span class="label-text">Дата рождения</span>
            <input id="date" name="date" type="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>" 
                   class="<?php echo isset($errors['date']) ? 'error' : ''; ?>" 
                   required />
        </label>
        <?php if (isset($errors['date'])): ?>
            <div style="color: red; font-size: 12px;"><?php echo $errors['date']; ?></div>
        <?php endif; ?>
    </div>

    <label>
        <span class="label-text">Пожелания</span>
        <textarea name="message" 
                  class="<?php echo isset($errors['message']) ? 'error' : ''; ?>"><?php echo isset($_POST['message']) ? $_POST['message'] : ''; ?></textarea>
    </label>
    <?php if (isset($errors['message'])): ?>
        <div style="color: red; font-size: 12px;"><?php echo $errors['message']; ?></div>
    <?php endif; ?>

    <div class="bottom-buttons">
        <button id="but2" type="submit">Отправить</button>
        <button id="but3" type="reset" onclick="clearForm()">Очистить</button>
    </div>
</form> -->
