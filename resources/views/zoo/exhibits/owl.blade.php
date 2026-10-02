<x-zoo.exhibit :bug="$bug">
    <form class="form-stack" id="ageForm" action="#" method="get">
        <label class="field">
            <span>Дата рождения</span>
            <input class="input" type="date" id="birth" name="birth">
        </label>
        <button type="submit" class="btn" id="checkAge">Войти</button>
        <p id="ageMsg" class="msg" role="status"></p>
    </form>
</x-zoo.exhibit>
