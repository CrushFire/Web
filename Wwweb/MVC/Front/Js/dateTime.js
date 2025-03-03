function updateTime() {
    const now = new Date();
    const options = { day: '2-digit', month: '2-digit', year: '2-digit', hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: false };
    const formattedDateTime = now.toLocaleString('ru-RU', options).replace(',', ''); // Убираем запятую
    document.getElementById('dateTime').innerText = formattedDateTime;
}

// Обновляем время каждую секунду
setInterval(updateTime, 1000);
updateTime(); // Вызываем сразу, чтобы не ждать 1 секунду для первого отображения