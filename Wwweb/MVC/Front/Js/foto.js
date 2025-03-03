// const country = ["Россия", "Абхазия", "Албания", "Алжир", "Андорра", 
//     "Ангола", "Австралия", "Австрия", "Азербайджан", "Бельгия", 
//     "Бенин", "Болгария", "Боливия", "Босния", "Англия"]
// const images = [
//     "d:\\Веб_Картинки\\Россия.jpg",
//     "d:\\Веб_Картинки\\Абхазия.jpg",
//     "d:\\Веб_Картинки\\Албания.jpg",
//     "d:\\Веб_Картинки\\Алжир.jpg",
//     "d:\\Веб_Картинки\\Андорра.jpg",
//     "d:\\Веб_Картинки\\Ангола.jpg",
//     "d:\\Веб_Картинки\\Австралия.jpg",
//     "d:\\Веб_Картинки\\Австрия.jpg",
//     "d:\\Веб_Картинки\\Азербайджан.jpg",
//     "d:\\Веб_Картинки\\Бельгия.jpg",
//     "d:\\Веб_Картинки\\Бенин.jpg",
//     "d:\\Веб_Картинки\\Болгария.jpg",
//     "d:\\Веб_Картинки\\Боливия.jpg",
//     "d:\\Веб_Картинки\\Босния.jpg",
//     "d:\\Веб_Картинки\\Англия.jpg"
// ]
// const image1 = document.getElementById('img_1');
// const image2 = document.getElementById('img_2');
// const image3 = document.getElementById('img_3');
// const text1 = document.getElementById("text_1")
// const text2 = document.getElementById("text_2")
// const text3 = document.getElementById("text_3")
// const modal = document.getElementById("myModal");
// const modalImg = document.getElementById("modalImg");
// const closeModal = document.getElementById("closeModal");
// var string = "  "

//     for(let i = 0; i < 15; i++){
//         const img = document.createElement('img')
//         img.style = height="150", width="150"
//         img.src = images[i]
//         img.title = country[i]
//         string += country[i] + " "
//         img.style.cursor = "pointer"; // Курсор для указания, что изображение кликабельно
    
//         img.onclick = function() {
//             modal.style.display = "block";
//             modalImg.src = images[i]; // Увеличиваем изображение
//             modalImg.width = 750;
//             modalImg.height = 500;
//         };
//         if(i % 5 == 4){
//             const text = document.createElement("pre")
//             text.textContent = string
//             switch(i / 5 + 0.2){
//                 case 1:
//                     text1.appendChild(text)
//                     break
//                 case 2:
//                     text2.appendChild(text)
//                     break
//                 case 3:
//                     text3.appendChild(text)
//                     break
//             }
//             string = "  "
//         }
//         if(i / 5 < 1){
//             image1.appendChild(img);
//             image1.class = "img";
//         }
//         else if(i / 5 < 2){
//             image2.appendChild(img)
//         }
//         else{
//             image3.appendChild(img)
//         }
//     }
//     closeModal.onclick = function() {
//         modal.style.display = "none";
//     };
    
//     // Закрытие модального окна при нажатии за его пределами
//     window.onclick = function(event) {
//         if (event.target == modal) {
//             modal.style.display = "none";
//         }
//     };

//     $(function() {
//         $('.images').slick({
//             infinite: true,
//             slidesToShow: 1,
//             slidesToScroll: 1,
//             arrows: true,
//             prevArrow: $('.prev'),
//             nextArrow: $('.next'),
//             autoplay: true,
//             autoplaySpeed: 2000,
//             adaptiveHeight: true,
//             dots: false,
//             customPaging: function(slider, i) {
//                 return '<div class="slick-dot">' + sliderImages[i].title + '</div>';
//             },
//             beforeChange: function(event, slick, currentSlide, nextSlide) {
//                 // Обновление текста при смене слайда
//                 description.textContent = sliderImages[nextSlide].title;
//                 modalImg.src = sliderImages[nextSlide].src;
//                 modalImg.alt = sliderImages[nextSlide].title;
//                 modalImg.title = sliderImages[nextSlide].title;
//             }
//         });
//     });

// Данные для изображений и описаний
const images = [
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Россия.jpg", "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Абхазия.jpg", 
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Албания.jpg", "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Алжир.jpg", 
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Андорра.jpg", "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Ангола.jpg", 
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Австралия.jpg", "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Австрия.jpg", 
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Азербайджан.jpg", "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Бельгия.jpg", 
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Бенин.jpg", "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Болгария.jpg", 
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Боливия.jpg", "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Босния.jpg", 
    "C:\\Users\\CrushFire\\OneDrive\\Рабочий стол\\Веб\\Веб_Картинки\\Англия.jpg"
];
const titles = [
    "Россия", "Абхазия", "Албания", "Алжир", "Андорра", 
    "Ангола", "Австралия", "Австрия", "Азербайджан", "Бельгия", 
    "Бенин", "Болгария", "Боливия", "Босния", "Англия"
];

let currentIndex = 0;

// Контейнер для изображений
const imageContainer = $('#images');
const modal = $('#myModal');
const modalImg = $('#modalImg');
const prevArrow = $('.prev');
const nextArrow = $('.next');

check=0;

// Динамическое добавление изображений
images.forEach((src, index) => {
    const img = $('<img>').attr('src', src).attr('alt', titles[index]).attr('title', titles[index]);
    img.on('click', function() {
        currentIndex = index;
        showModal();
    });
    check++;
    imageContainer.append(img);
    img.css("padding", "5px");
    if(check % 10 == 0){
        let text1 = $('<span>').text(titles[check - 5]).addClass("text-img-2");
        imageContainer.append(text1);
        let text2 = $('<span>').text(titles[check - 4]).addClass("text-img-2");
        imageContainer.append(text2);
        let text3 = $('<span>').text(titles[check - 3]).addClass("text-img-2");
        imageContainer.append(text3);
        let text4 = $('<span>').text(titles[check - 2]).addClass("text-img-2");
        imageContainer.append(text4);
        let text5 = $('<span>').text(titles[check - 1]).addClass("text-img-2");
        imageContainer.append(text5);
    }
    else if(check % 5 == 0){
    let text1 = $('<span>').text(titles[check - 5]).addClass("text-img");
    imageContainer.append(text1);
    let text2 = $('<span>').text(titles[check - 4]).addClass("text-img");
    imageContainer.append(text2);
    let text3 = $('<span>').text(titles[check - 3]).addClass("text-img");
    imageContainer.append(text3);
    let text4 = $('<span>').text(titles[check - 2]).addClass("text-img");
    imageContainer.append(text4);
    let text5 = $('<span>').text(titles[check - 1]).addClass("text-img");
    imageContainer.append(text5);
    }
});

// Функция для отображения модального окна
function showModal() {
    modal.show();
    modalImg.attr('src', images[currentIndex]);
    modalImg.attr('alt', titles[currentIndex]);
    modalImg.attr('title', titles[currentIndex]);
}

// Закрытие модального окна
modal.on('click', function(event) {
    if (event.target !== modalImg[0] && event.target !== prevArrow[0] && event.target !== nextArrow[0]) {
        modal.hide();
    }
});

// Навигация по изображениям с помощью стрелок
prevArrow.on('click', function() {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showModal();
});

nextArrow.on('click', function() {
    currentIndex = (currentIndex + 1) % images.length;
    showModal();
});