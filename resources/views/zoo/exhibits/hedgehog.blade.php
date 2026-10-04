<x-zoo.exhibit :bug="$bug">
    <form class="hedgehog-form">
        <label>
            Поле 1:
            <input type="text" id="hedgehog-1" tabindex="3">
        </label>
        <br>
        <label>
            Поле 2:
            <input type="text" id="hedgehog-2" tabindex="1">
        </label>
        <br>
        <label>
            Поле 3:
            <input type="text" id="hedgehog-3" tabindex="2">
        </label>
        <br>
        <button type="submit" id="hedgehog-submit" tabindex="-1">Отправить</button>
        <button type="button" id="hedgehog-other">Другое действие</button>
    </form>
</x-zoo.exhibit>

<style>
    .hedgehog-form button,
    .hedgehog-form input {
        outline: none;
    }
    #hedgehog-other {
        /* No tabindex, so follows natural order after button? Actually button with tabindex -1 is removed from tab order */
    }
</style>