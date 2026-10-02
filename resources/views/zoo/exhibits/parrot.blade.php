<x-zoo.exhibit :bug="$bug">
    <form class="form-stack" id="emailForm" action="#" method="get">
        <label class="field">
            <span>Email</span>
            <input class="input" id="email" name="email" type="text" placeholder="you@example.com" autocomplete="email">
        </label>
        <button type="submit" class="btn" id="checkEmail">Проверить</button>
        <p id="emailMsg" class="msg" role="status"></p>
    </form>
</x-zoo.exhibit>
