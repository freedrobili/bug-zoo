<x-zoo.exhibit :bug="$bug">
    <div class="sloth-exhibit">
        <label>
            Поиск города:
            <input type="text" id="sloth-search" placeholder="Введите название города">
        </label>
        <ul id="sloth-results"></ul>
    </div>
</x-zoo.exhibit>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('sloth-search');
        const results = document.getElementById('sloth-results');

        // Simulate API with random delay
        function fakeFetch(city, callback) {
            const delay = Math.random() * 1000; // 0-1s
            setTimeout(() => {
                // Return some dummy suggestions
                const suggestions = [
                    city + 'а',
                    city + 'ов',
                    city + 'ск'
                ];
                callback(suggestions);
            }, delay);
        }

        input.addEventListener('input', function (e) {
            const value = e.target.value.trim();
            if (!value) {
                results.innerHTML = '';
                return;
            }

            fakeFetch(value, function (suggestions) {
                // BUG: overwriting without checking if this request is still relevant
                results.innerHTML = suggestions.map(s => `<li>${s}</li>`).join('');
            });
        });
    });
</script>