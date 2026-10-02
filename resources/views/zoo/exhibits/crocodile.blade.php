<x-zoo.exhibit :bug="$bug" class="exhibit--clip">
    <div class="dd">
        <button type="button" class="btn" id="ddBtn">Страна ▾</button>
        <ul class="dd-menu" id="ddMenu" hidden>
            <li><button type="button">Австрия</button></li>
            <li><button type="button">Бельгия</button></li>
            <li><button type="button">Германия</button></li>
            <li><button type="button">Испания</button></li>
            <li><button type="button">Нидерланды</button></li>
            <li><button type="button">Польша</button></li>
        </ul>
    </div>
    <p id="ddMsg" class="msg" role="status"></p>
</x-zoo.exhibit>
