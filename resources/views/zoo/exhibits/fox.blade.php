<x-zoo.exhibit :bug="$bug">
    <form class="form-stack" id="shipForm" action="#" method="get">
        <fieldset class="choices">
            <legend>Доставка</legend>
            <label class="choice">
                <input type="radio" name="ship-std" value="std">
                <span>Стандарт · 3 дня</span>
            </label>
            <label class="choice">
                <input type="radio" name="ship-exp" value="exp">
                <span>Экспресс · завтра</span>
            </label>
            <label class="choice">
                <input type="radio" name="ship-night" value="night">
                <span>Ночная · до 08:00</span>
            </label>
        </fieldset>
        <button type="submit" class="btn">Оформить</button>
        <p id="shipMsg" class="msg" role="status"></p>
    </form>
</x-zoo.exhibit>
