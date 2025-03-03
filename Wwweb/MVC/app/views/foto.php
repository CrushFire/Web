<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="
http://localhost:3000/MVC/Front/Css/Styles.css">
    <title>Фотоальбом</title>
</head>
<html>
<header
    style="height: 2cm; border: 1px solid black; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.4); margin-bottom: 3px; font-size: 6mm; background-color: white;">
    <div style="border: solid; color: rgb(0, 0, 0); height: 19mm;">
        <div id="top" style="margin-top: 5mm;">
            <a href="index.php?page=about_me" class="left">
                Обо мне
            </a>
            <div style="float:inline-start" class="General_menu">
                <a href="index.php?page=my_interests" class="left">
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
                            <a style="color:yellowgreen" href="my_interests.html#anime">Аниме</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div style="float:inline-end; margin-right: 5mm;" id="dateTime">

            </div>
            <a href="index.php?page=study" class="left">
                Учеба
            </a>
            <div style="float:right; margin-right: 5mm;">
                <a href="index.php?page=Main_page" class="right">
                    Главная страница
                </a>
                <a href="index.php?page=conatcts" class="right">
                    Контакты
                </a>
                <a href="index.php?page=test" class="right">
                    Тест
                </a>
                <a href="index.php?page=history" class="right">
                    История
                </a>
            </div>
        </div>
    </div>
</header>

<body>
    <div style="height: 200mm; " class="border">
        <div style=" height: 200mm; border:  solid; color:black;">
            <!-- <div id="images" style="margin-left: 2.5mm; margin-top: 12mm; text-align: center;">
                <div style="display: flexbox;" id = "img_1">
                </div>
            <div style = "display: flexbox; word-spacing: 20mm" id = "text_1">
            </div>
                <div style="display: flexbox;" id = "img_2">
                </div>
                <div style="display: flexbox; word-spacing: 15mm" id = "text_2">
                </div>
                <div style="display: flexbox;" id = "img_3">
                
                </div>
                <div style="display: flexbox; word-spacing: 20mm" id = "text_3">
                </div>
                <div id="myModal" class="modal">
                    <span class="close" id="closeModal">&times;</span>
                    <img class="modal-content-img" id="modalImg" style="margin-top: 25mm;">
                </div>
            </div> -->
            <!-- Контент -->
            <div class="gallery">
                <!-- Проверка на не пустые -->
                <?php if (!empty($photos)): ?>
                <?php foreach ($photos as $photo): ?>
                <div class="photo-item">
                    <img src="<?= $photo['file'] ?>" alt="<?= $photo['alt'] ?>">
                    <p class="caption"><?= $photo['alt'] ?></p>
                </div>
                <?php endforeach; ?>
                <?php else: ?>
                    <p> Нет фотографий <p>
        <?php endif ?>
            </div>

            <div id="modal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <span class="nav-arrow prev" onclick="changeImage(-1)">&#10094;</span>
            <img class="modal-content" id="modal-img">
            <span class="nav-arrow next" onclick="changeImage(1)">&#10095;</span>
            </div>

            <!-- Модальное окно -->
        </div>
    </div>
</body>
<script>
        let currentIndex = 0;
        let photos = [
            <?php foreach ($photos as $photo): ?>
                "<?= htmlspecialchars($photo['file']) ?>",
            <?php endforeach; ?>
        ];

        function openModal(index) {
            currentIndex = index;
            document.getElementById("modal").style.display = "flex";
            updateImage();
        }

        function closeModal() {
            document.getElementById("modal").style.display = "none";
        }

        function changeImage(direction) {
            currentIndex += direction;
            if (currentIndex < 0) currentIndex = photos.length - 1;
            if (currentIndex >= photos.length) currentIndex = 0;
            updateImage();
        }

        function updateImage() {
            document.getElementById("modal-img").src = photos[currentIndex];
        }

        // Листание клавишами
        document.addEventListener("keydown", function(event) {
            if (document.getElementById("modal").style.display === "flex") {
                if (event.key === "ArrowLeft") changeImage(-1);
                if (event.key === "ArrowRight") changeImage(1);
                if (event.key === "Escape") closeModal();
            }
        });
    </script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\dateTime.js"></script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\historyPage.js"></script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="C:\Users\CrushFire\OneDrive\Рабочий стол\Веб\MVC\Front\Js\foto.js"></script>

</html>