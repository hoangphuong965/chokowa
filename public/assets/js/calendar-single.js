var date = new Date();

const renderCalendar = (date=new Date()) => {
    date.setDate(1);

    const monthDays = document.querySelector(".days");

    const lastDay = new Date(date.getFullYear(),date.getMonth() + 1,0).getDate();

    const prevLastDay = new Date(date.getFullYear(),date.getMonth(),0).getDate();

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(date.getFullYear(),date.getMonth() + 1,0).getDay();

    const nextDays = 7 - lastDayIndex - 1;

    const months = ["1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月"];

    document.querySelector(".date h1").innerHTML = `${months[date.getMonth()]}`;

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-month">
            <div class="prev-date">${prevLastDay - x + 1}</div> 
            <div class="prev-bottom-today"></div>
        </div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        if (
            i === new Date().getDate() &&
            date.getMonth() === new Date().getMonth()
        ) {
            days += `<div class="today">
            <div class="day" style={width:200;}>
                ${i}
            </div>
            <div class="bottom-today">
                <p>13:00 - 17:00</p>
            </div>
        </div>`;
        } else {
            days += `<div class="nottoday">
            <div class="day" style={width:200;}>
                ${i}
            </div>
            <div class="bottom-today">
                <p>11:00 - 13:00</p>
            </div>
        </div>`;
        }
    }

    for (let j = 1; j <= nextDays; j++) {
        days += `
        <div class="prev-month">
            <div class="prev-date">${j}</div><div class="prev-bottom-today">
            </div>
        </div>`;
        monthDays.innerHTML = days;
    }
};

document.querySelector(".prev").addEventListener("click", () => {
    date.setMonth(date.getMonth() - 1);
    renderCalendar(date);
});

document.querySelector(".next").addEventListener("click", () => {
    date.setMonth(date.getMonth() + 1);
    renderCalendar(date);
});

renderCalendar(date);