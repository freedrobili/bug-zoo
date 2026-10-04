<x-zoo.exhibit :bug="$bug">
    <div class="wolf-exhibit">
        <button type="button" id="wolf-order" class="btn">
            Оформить заказ
            <span id="wolf-spinner" class="spinner hidden">⏳</span>
        </button>
        <p id="wolf-status">Заказов оформлено: <span id="wolf-count">0</span></p>
    </div>
</x-zoo.exhibit>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const orderBtn = document.getElementById('wolf-order');
        const spinner = document.getElementById('wolf-spinner');
        const countEl = document.getElementById('wolf-count');

        let count = 0;

        orderBtn.addEventListener('click', function () {
            // BUG: disabling happens after setTimeout, not immediately
            orderBtn.disabled = true;
            spinner.style.display = 'inline';

            // Simulate 2 second delay
            setTimeout(function () {
                // In reality, we would disable BEFORE the timeout, but we do it after?
                // Actually the bug description says disabled is set inside setTimeout *after* response.
                // Let's simulate: we disable after a delay (as if waiting for response)
                orderBtn.disabled = true;
                spinner.style.display = 'none';

                // Increment count
                count++;
                countEl.textContent = count;

                // Re-enable after a short while? Actually it stays disabled until next click? We'll re-enable immediately for demo.
                orderBtn.disabled = false;
            }, 2000);
        });
    });
</script>