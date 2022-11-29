const date = new Date();

const renderCalendar = (date = new Date(), status) => {
    date.setDate(1);

    const monthDays = document.querySelector(".days");

    const lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDate();

    const prevLastDay = new Date(date.getFullYear(), date.getMonth(), 0).getDate();

    const firstDayIndex = date.getDay();

    const lastDayIndex = new Date(date.getFullYear(), date.getMonth() + 1, 0).getDay();

    const nextDays = 7 - lastDayIndex - 1;

    const currentDate = new Date().getDate();
    const currentMonth = new Date().getMonth();

    const months = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];

    document.querySelector(".date h1").innerHTML = `${months[date.getMonth()]}`;

    let days = "";

    for (let x = firstDayIndex; x > 0; x--) {
        days += `<div class="prev-month">
            <div class="prev-date">${prevLastDay - x + 1}</div> 
            <div class="prev-bottom-today"></div>
        </div>`;
    }

    for (let i = 1; i <= lastDay; i++) {
        if (i < currentDate && date.getMonth() === currentMonth) {
            days += `<div class="today">
            <div class="day" style={width:100;}>
                ${i}
            </div>
            <div class="bottom-today with-bg-past">
                <div class="time">
                    <p>15:00</p>
                    <p> - </p>
                    <p>19:00</p>
                </div>
            </div>
        </div>`;
        }
        else if (i > currentDate && date.getMonth() === currentMonth) {
            days += `<div class="future">
            <div class="day" style={width:100;}>
                ${i}
            </div>
            <div class="bottom-today with-bg-future">
                <div class="time">
                    <p>15:00</p>
                    <p> - </p>
                    <p>19:00</p>
                </div>
            </div>
        </div>`;
        }

        else {
            days += `<div class="nottoday">
            <div class="day" style={width:100;}>
                ${i}
            </div>
            <div class="bottom-today with-bg-future">
                <div class="time">
                    <p>11:00</p>
                    <p> - </p>
                    <p>13:00</p>
                </div>
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