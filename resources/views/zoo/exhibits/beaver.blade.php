<x-zoo.exhibit :bug="$bug">
    <div class="beaver-exhibit">
        <label>
            Выберите дату доставки:
            <input type="date" id="beaver-date" value="2026-03-15">
        </label>
        <br>
        <button type="button" id="beaver-check">Проверить</button>
        <p id="beaver-result" class="mt-2"></p>
    </div>
</x-zoo.exhibit>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const dateInput = document.getElementById('beaver-date');
        const checkBtn = document.getElementById('beaver-check');
        const resultEl = document.getElementById('beaver-result');

        checkBtn.addEventListener('click', function () {
            const selected = dateInput.value; // format: YYYY-MM-DD
            // Simulate buggy code: new Date(selected) then getDate()
            const dateObj = new Date(selected); // parsed as UTC midnight
            const dayInUTC = dateObj.getUTCDate(); // correct day in UTC
            const dayInLocal = dateObj.getDate(); // day in local timezone
            const monthInUTC = dateObj.getUTCMonth() + 1;
            const monthInLocal = dateObj.getMonth() + 1;
            const yearInUTC = dateObj.getUTCFullYear();
            const yearInLocal = dateObj.getFullYear();

            let message = `Вы выбрали: ${selected}<br>`;
            if (dayInUTC !== dayInLocal || monthInUTC !== monthInLocal || yearInUTC !== yearInLocal) {
                message += `<span class="text-danger">Баг: из‑за часового пояса браузер считает дату ${yearInLocal}-${monthInLocal.toString().padStart(2,'0')}-${dayInLocal.toString().padStart(2,'0')}</span>`;
            } else {
                message += `<span class="text-success">В вашем часовом поясе дата совпадает.</span>`;
            }
            resultEl.innerHTML = message;
        });
    });
</script>