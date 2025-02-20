// Функция для отслеживания посещения страницы
window.onload = function() {
    trackPageVisit(document.title); // Используем заголовок страницы как имя
}

function trackPageVisit(pageName) {
    // Увеличиваем количество посещений в Local Storage
    const allData = JSON.parse(localStorage.getItem('allHistory')) || {};
    allData[pageName] = (allData[pageName] || 0) + 1;
    localStorage.setItem('allHistory', JSON.stringify(allData));
    const newData = JSON.parse(sessionStorage.getItem('sessionHistory')) || {};
    newData[pageName] = (newData[pageName] || 0) + 1;
    sessionStorage.setItem('sessionHistory', JSON.stringify(newData));
}

// получаем данные из Local Storage
const sessionData = JSON.parse(sessionStorage.getItem('sessionHistory'));
const allData = JSON.parse(localStorage.getItem('allHistory'));

// выводим данные в таблицу 'История текущего сеанса'
const sessionTable = document.getElementById('sessionHistoryTable');
for (const key in sessionData) {
  const row = sessionTable.insertRow();
  const cell1 = row.insertCell(0);
  const cell2 = row.insertCell(1);
  cell1.innerHTML = key;
  cell2.innerHTML = sessionData[key];
}

// выводим данные в таблицу 'История за все время'
const allTimeTable = document.getElementById('allTimeHistoryTable');
for (const key in allData) {
  const row = allTimeTable.insertRow();
  const cell1 = row.insertCell(0);
  const cell2 = row.insertCell(1);
  cell1.innerHTML = key;
  cell2.innerHTML = allData[key];
}
