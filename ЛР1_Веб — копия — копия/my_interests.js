topics = ["music", "book", "anime"]

function ShowInterests(...interests){
    const form = document.getElementById(topics[1])
    interests.forEach(interest => {
        const h3 = document.createElement("h3")
        h3.textContent = interest
        h3.style = "margin-left: 2.5mm; font-weight: lighter; text-decoration:underline;"
        form.appendChild(h3)
    });
}

ShowInterests('Максим Горький."Старуха Изергиль" ', 'Эмили Бронте. "Грозовой перевал"', 'Александр Сергеевич Пушкин. "Евгений Онегин"')