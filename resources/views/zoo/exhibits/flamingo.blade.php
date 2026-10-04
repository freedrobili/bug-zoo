<x-zoo.exhibit :bug="$bug">
    <div class="flamingo-exhibit">
        <label>
            Цена 1:
            <input type="text" id="flamingo-price1" placeholder="Например: 1 299,50">
        </label>
        <br>
        <label>
            Цена 2:
            <input type="text" id="flamingo-price2" placeholder="Например: 100">
        </label>
        <br>
        <button type="button" id="flamingo-sum">Суммировать</button>
        <p id="flamingo-result" class="mt-2"></p>
    </div>
</x-zoo.exhibit>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const price1Input = document.getElementById('flamingo-price1');
        const price2Input = document.getElementById('flamingo-price2');
        const sumBtn = document.getElementById('flamingo-sum');
        const resultEl = document.getElementById('flamingo-result');

        sumBtn.addEventListener('click', function () {
            const p1 = price1Input.value.trim();
            const p2 = price2Input.value.trim();
            // BUG: using parseFloat which fails on space and comma
            const num1 = parseFloat(p1);
            const num2 = parseFloat(p2);
            const sum = num1 + num2;
            resultEl.textContent = `Итого: ${sum} ₽`;
        });
    });
</script>