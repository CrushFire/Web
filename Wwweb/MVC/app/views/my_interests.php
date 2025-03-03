<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="http://localhost:3000/MVC/Front/Css/Styles.css">
    <title>Мои интересы</title>
</head>
<html>
<header>
    <div id="top" style="margin-top: 5mm;">
        <a href=about_me.html class="left">
            Обо мне
        </a>
        <a href=Main_page.html class="left">
            Главное меню
        </a>
        <a href=study.html class="left">
            Учеба
        </a>
        <div style="float:inline-end; margin-right: 5mm;" id="dateTime">
                
        </div>
        <div style="float:right; margin-right: 5mm;">
            <a href=foto.html class="right">
                Фотоальбом
            </a>
            <a href=conatcts.html class="right">
                Контакты
            </a>
            <a href=test.html class="right">
                Тест
            </a>
            <a href="history.html" class="right">
                История
            </a>
        </div>
    </div>
</header>

<body>
    <div
        style="height: 70mm; " class="border">
        <div style="border: solid; color: rgb(0, 0, 0);">
            <div style="margin-left: 2.5mm;">
                <h1>
                    <u>
                        Мои интересы
                    </u>
                </h1>
                <?php for($i = 0; $i < count($interests); $i++): ?>
                <h3>
                    <ul>
                        <li>
                            <a href= "#<?= $interests[$i]['ref'] ?>" style="text-decoration: none; color: black">
                                <?= $interests[$i]['head'] ?>
                            </a>
                        </li>
                    </ul>
                </h3>
                <?php endfor; ?>
            </div>
        </div>
    </div>
    <div
        class="border">
        <div style="border: solid; color: rgb(0, 0, 0);">
        <?php for($i = 0; $i < count($interests); $i++): ?>
            <div style="background-color: white; margin-left: 2.5mm;" id = "<?= $interests[$i]['ref'] ?>">
                <h2>
                    <u>
                        <a name= <?= $interests[$i]['head'] ?>>
                            
                        </a>
                    </u>
                </h2>
                <p>
                    <?= $interests[$i]['description'] ?>
                </p>
                <?php for($j = 1; $j < 4; $j++): ?>
                <h3 style="margin-left: 2.5mm; font-weight: lighter; text-decoration:underline;">
                    <?= $interests[$i]['part'.$j] ?>
                </h3>
                <?php if($i != 1): ?>
                <image>
                    <img src= '<?= $interests[$i]['img'.$j] ?>' height="250mm" width="350mm"
                        style="border: 1px solid black; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); margin-bottom: 3px; font-size: 6mm; font-size: 5.5mm; background-color: white; margin-left: 2.5mm;">
                </image>
                <?php endif; ?>
                <?php endfor; ?>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</body>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\my_interests.js"></script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\dateTime.js"></script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\historyPage.js"></script>
</html>