<x-zoo.exhibit :bug="$bug">
    <div class="squirrel-exhibit">
        <label>
            Имя:
            <input type="text" id="squirrel-name" placeholder="Ваше имя">
        </label>
        <br>
        <label>
            <input type="checkbox" id="squirrel-remember">
            Запомнить меня
        </label>
        <br>
        <button type="button" id="squirrel-save">Сохранить</button>
        <p id="squirrel-status"></p>
    </div>
</x-zoo.exhibit>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const nameInput = document.getElementById('squirrel-name');
        const rememberCheckbox = document.getElementById('squirrel-remember');
        const saveBtn = document.getElementById('squirrel-save');
        const status = document.getElementById('squirrel-status');

        // Bug: saving on keydown reads value before the key is applied
        function saveName() {
            localStorage.setItem('squirrelName', nameInput.value);
        }
        nameInput.addEventListener('keydown', saveName);

        // Bug: checkbox saved as string "true"/"false"
        function saveRemember() {
            localStorage.setItem('squirrelRemember', rememberCheckbox.checked ? 'true' : 'false');
        }
        rememberCheckbox.addEventListener('change', saveRemember);

        // Load on page load
        const savedName = localStorage.getItem('squirrelName');
        const savedRememberStr = localStorage.getItem('squirrelRemember');
        if (savedName !== null) {
            nameInput.value = savedName;
        }
        if (savedRememberStr !== null) {
            // Bug: any non-empty string is truthy, so "false" -> true
            rememberCheckbox.checked = Boolean(savedRememberStr);
        }

        // Save button also triggers save (optional)
        saveBtn.addEventListener('click', function () {
            saveName();
            saveRemember();
            status.textContent = 'Сохранено';
            setTimeout(() => { status.textContent = ''; }, 1500);
        });
    });
</script>