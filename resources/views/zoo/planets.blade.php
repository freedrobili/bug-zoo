{{-- Resources/views/zoo/planets.blade.php --}}
@extends('layouts.app')

@section('title', 'Интересные баги на странице')

@section('content')
<div class="bug-page-container">
    <header class="bug-page-header">
        <h1>Страница с интересными багами</h1>
    <p>Найдите все 8 багов, включив режим охоты. Правильный клик на баг даёт +10, ошибочный – -5.</p>
        <div class="bug-controls">
            <button id="toggleHunt" class="btn btn-primary">Включить режим охоты</button>
            <span id="huntStatus" class="hunt-status">Режим: отключен</span>
        </div>
        <div class="bug-score">
            Баллы: <span id="score">100</span>
        </div>
        <div class="bug-info" id="infoPanel">
            Режим охоты: кликайте на подозрительные элементы. Угадайте, где скрыт баг.
        </div>
    </header>

    <main class="bug-page-main">
        <!-- Баг 1: неправильная ссылка (переход на другой сайт) -->
        <section class="bug-item" data-bug-id="1" data-bug-type="wrong-link">
            <img src="https://via.placeholder.com/150x100?text=Bug+1" alt="Иллюстрация бага 1" class="bug-img">
            <h2>Баг 1: Ссылка prowadzi в неверное место</h2>
            <p>
                Нажмите на ссылку ниже, чтобы перейти к разделу про Марс.
                <a href="https://example.com" class="bug-link" data-bug-part="link">Перейти к Марсу</a>
            </p>
        </section>

        <!-- Баг 2: убегающая кнопка -->
        <section class="bug-item" data-bug-id="2" data-bug-type="evading-button">
            <img src="https://via.placeholder.com/150x100?text=Bug+2" alt="Иллюстрация бага 2" class="bug-img">
            <h2>Баг 2: Кнопка, которая убегает</h2>
            <p>
                Попробуйте навести курсор на кнопку – она будет отодвигаться.
                <button class="evade-btn" data-bug-part="button">Навести на меня</button>
            </p>
        </section>

        <!-- Баг 3: неработающая смена темы -->
        <section class="bug-item" data-bug-id="3" data-bug-type="broken-theme">
            <img src="https://via.placeholder.com/150x100?text=Bug+3" alt="Иллюстрация бага 3" class="bug-img">
            <h2>Баг 3: Переключатель темы (сломан)</h2>
            <p>
                Переключите тему, чтобы увидеть, как она должна менять цвета.
                <label class="theme-switch">
                    <input type="checkbox" id="theme-toggle" data-bug-part="checkbox">
                    <span class="slider"></span>
                    Тёмная тема
                </label>
            </p>
            <p class="theme-preview">Этот абзац должен изменить фон при включении тёмной темы.</p>
        </section>

        <!-- Баг 4: форма с неверным action -->
        <section class="bug-item" data-bug-id="4" data-bug-type="wrong-form-action">
            <img src="https://via.placeholder.com/150x100?text=Bug+4" alt="Иллюстрация бага 4" class="bug-img">
            <h2>Баг 4: Форма отправляет данные не туда</h2>
            <form class="bug-form" method="POST" action="/wrong-endpoint">
                @csrf
                <label for="bug-name">Ваше имя:</label>
                <input type="text" id="bug-name" name="name" placeholder="Введите имя">
                <button type="submit" class="submit-btn" data-bug-part="submit">Отправить</button>
            </form>
        </section>

        <!-- Баг 5: модальное окно без возможности закрыть -->
        <section class="bug-item" data-bug-id="5" data-bug-type="unstoppable-modal">
            <img src="https://via.placeholder.com/150x100?text=Bug+5" alt="Иллюстрация бага 5" class="bug-img">
            <h2>Баг 5: Модальное окно, которое не закрывается</h2>
            <button class="open-modal-btn" data-bug-part="open">Открыть модальное окно</button>
            <div class="modal-backdrop" id="modal-5" aria-hidden="true">
                <div class="modal">
                    <h2>Секретное предложение</h2>
                    <p>Это модальное окно не имеет кнопки закрытия.</p>
                    <!-- Нет кнопки закрытия -->
                </div>
            </div>
        </section>

        <!-- Баг 6: подсказка с неверной информацией -->
        <section class="bug-item" data-bug-id="6" data-bug-type="false-tooltip">
            <img src="https://via.placeholder.com/150x100?text=Bug+6" alt="Иллюстрация бага 6" class="bug-img">
            <h2>Баг 6: Подсказка с неверным текстом</h2>
            <p>
                Наведите на слово ниже, чтобы увидеть подсказку.
                <span class="has-tooltip" data-bug-part="tooltip" data-tooltip-text="Это правильная подсказка">
                    Подозрительное слово
                </span>
            </p>
        </section>

        <!-- Баг 7: чекбокс, который не меняет состояние -->
        <section class="bug-item" data-bug-id="7" data-bug-type="stuck-checkbox">
            <img src="https://via.placeholder.com/150x100?text=Bug+7" alt="Иллюстрация бага 7" class="bug-img">
            <h2>Баг 7: Чекбокс, который не реагирует на клик</h2>
            <label class="stuck-label">
                <input type="checkbox" id="stuck-checkbox" data-bug-part="checkbox" disabled>
                Этот чекбокс выключен, но должен быть включен
            </label>
        </section>

        <!-- Баг 8: счётчик, который считает неправильно -->
        <section class="bug-item" data-bug-id="8" data-bug-type="broken-counter">
            <img src="https://via.placeholder.com/150x100?text=Bug+8" alt="Иллюстрация бага 8" class="bug-img">
            <h2>Баг 8: Счётчик кликов</h2>
            <p>
                Нажмите на кнопку ниже, чтобы увеличить счётчик.
                <button class="counter-btn" data-bug-part="counter">Кликните меня</button>
                <span class="counter-value" id="counter-display">0</span> кликов
            </p>
        </section>
    </main>
</div>

<style>
    :root {
        --primary-color: var(--accent);
        --primary-hover: #0b5ed7;
        --accent-color: var(--accent-2);
        --accent-hover: #e65100;
        --warning-color: var(--danger);
        --text-dark: var(--ink);
        --text-muted: var(--mute);
        --bg-light: var(--bg-2);
        --border-color: var(--line);
        --radius: var(--radius);
        --transition: 0.2s ease;
    }
    .bug-page-container { max-width: 960px; margin: 0 auto; padding: 2rem; }
    .bug-page-header { text-align: center; margin-bottom: 2rem; }
    .bug-page-header h1 { font-size: 2rem; margin-bottom: 0.5rem; color: var(--text-dark); }
    .bug-page-header p { color: #000; font-size: 1.1rem; }
    .bug-item p { color: #000; }
    .bug-item h2 { color: #000; }
    .bug-controls { margin-bottom: 1.5rem; display: flex; align-items: center; gap: 1rem; flex-wrap: wrap; justify-content: center; }
    .hunt-status { margin-left: 1rem; font-weight: 600; }
    .bug-score { text-align: right; font-size: 1.2rem; font-weight: bold; color: var(--primary-color); min-width: 120px; }
    .bug-info { text-align: center; margin-top: 1rem; font-size: 1rem; color: #000; max-width: 600px; margin-left: auto; margin-right: auto; }
    .bug-page-main { display: grid; gap: 2rem; }
    .bug-item {
        border: 2px solid var(--border-color);
        border-radius: var(--radius);
        padding: 1.5rem;
        background: var(--bg-light);
        position: relative;
        transition: transform var(--transition), box-shadow var(--transition);
    }
    .bug-item:hover { transform: translateY(-4px); box-shadow: 0 6px 14px rgba(0,0,0,0.1); }
    .bug-item.is-suspected { outline: 3px solid #ff0; background: rgba(255,255,0,0.15); }
    .bug-item.is-found { outline: 3px solid #0f0; background: rgba(0,255,0,0.1); }
    .bug-img { max-width: 100%; height: auto; display: block; margin-bottom: 1rem; }
    .bug-link { color: var(--accent-color); text-decoration: underline; }
    .bug-link:hover { color: var(--accent-hover); }
    .evade-btn { padding: 0.6rem 1.2rem; background: var(--primary-color); color: white; border: none; border-radius: var(--radius); cursor: pointer; transition: background var(--transition); }
    .evade-btn:hover { background: var(--primary-hover); }
    .theme-switch { position: relative; display: inline-block; width: 50px; height: 24px; margin-left: 0.5rem; }
    .theme-switch input { opacity: 0; width: 0; height: 0; }
    .slider { position: absolute; cursor: pointer; top: 0; left: 0; right: 0; bottom: 0; background: #ccc; transition: .4s; border-radius: 24px; }
    .slider:before { position: absolute; content: ""; height: 18px; width: 18px; left: 3px; bottom: 3px; background: white; transition: .4s; border-radius: 50%; }
    input:checked + .slider { background: var(--primary-color); }
    input:checked + .slider:before { transform: translateX(26px); }
    .theme-preview { margin-top: 0.5rem; padding: 0.75rem; background: #e8f4fc; border-left: 4px solid var(--accent-color); font-style: italic; color: #000; }
    .bug-form { display: flex; flex-direction: column; gap: 0.75rem; max-width: 400px; }
    .bug-form label { font-weight: 500; }
    .bug-form input { padding: 0.6rem; border: 2px solid #bdc3c7; border-radius: var(--radius); font-size: 1rem; }
    .bug-form input:focus { outline: none; border-color: var(--primary-color); }
    .submit-btn { align-self: flex-start; padding: 0.6rem 1.2rem; background: var(--primary-color); color: white; border: none; border-radius: var(--radius); cursor: pointer; }
    .submit-btn:hover { background: var(--primary-hover); }
    .open-modal-btn { padding: 0.6rem 1.2rem; background: var(--warning-color); color: white; border: none; border-radius: var(--radius); cursor: pointer; }
    .open-modal-btn:hover { background: #c0392b; }
    .modal-backdrop { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); align-items: center; justify-content: center; z-index: 1000; }
    .modal-backdrop.show { display: flex; }
    .modal { background: white; padding: 2rem; border-radius: var(--radius); width: 90%; max-width: 400px; text-align: center; position: relative; }
    .has-tooltip { position: relative; cursor: help; border-bottom: 1px dotted var(--text-muted); }
    .has-tooltip::after {
        content: attr(data-tooltip-text);
        position: absolute;
        bottom: 125%;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0,0,0,0.75);
        color: white;
        padding: 0.4rem 0.8rem;
        border-radius: 4px;
        font-size: 0.85rem;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s;
    }
    .has-tooltip:hover::after { opacity: 1; }
    .stuck-label { display: flex; align-items: center; gap: 0.5rem; font-size: 1rem; }
    .counter-btn { padding: 0.6rem 1.2rem; background: var(--primary-color); color: white; border: none; border-radius: var(--radius); cursor: pointer; }
    .counter-btn:hover { background: var(--primary-hover); }
    .counter-value { font-weight: bold; margin: 0 0.3rem; color: var(--primary-color); }
    .btn { padding: 0.6rem 1.2rem; background: var(--primary-color); color: white; border: none; border-radius: var(--radius); font-size: 1rem; cursor: pointer; }
    .btn:hover { background: var(--primary-hover); }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('toggleHunt');
        const statusEl = document.getElementById('huntStatus');
        const scoreEl = document.getElementById('score');
        const infoPanel = document.getElementById('infoPanel');
        let huntMode = false;
        let score = parseInt(scoreEl.textContent) || 100;
        let bugsFound = new Set();
        const totalBugs = 8;
        // Track state for some bugs
        let themeToggleState = false; // false = light, true = dark (intended)
        let counterValue = 0;

        // Обновление UI
        function updateUI() {
            statusEl.textContent = huntMode ? 'Режим: включен (кликайте на подозрительные элементы)' : 'Режим: отключен';
            scoreEl.textContent = score;
            if (huntMode) {
                infoPanel.textContent = 'Режим охоты: кликайте на подозрительные элементы. Правильный клик даёт +10, ошибочный -5.';
            } else {
                infoPanel.textContent = `Режим охоты отключён. Найдено багов: ${bugsFound.size}/${totalBugs}.`;
                if (bugsFound.size === totalBugs) {
                    infoPanel.textContent = `Поздравляем! Вы нашли все ${totalBugs} багов!`;
                }
            }
        }

        // Переключение режима охоты
        toggleBtn.addEventListener('click', function () {
            huntMode = !huntMode;
            toggleBtn.textContent = huntMode ? 'Выключить режим охоты' : 'Включить режим охоты';
            // Сбрасываем подозрительные выделения
            if (!huntMode) {
                document.querySelectorAll('.bug-item').forEach(item => item.classList.remove('is-suspected'));
            }
            updateUI();
        });

        // Обработчик клика по элементам с data-bug-id
        document.body.addEventListener('click', function (e) {
            if (!huntMode) return;
            const bugItem = e.target.closest('.bug-item[data-bug-id]');
            if (!bugItem) return;
            const bugId = bugItem.getAttribute('data-bug-id');
            const bugType = bugItem.getAttribute('data-bug-type');

            // Если уже найден
            if (bugsFound.has(bugId)) {
                bugItem.classList.add('is-found');
                bugItem.classList.remove('is-suspected');
                return;
            }

            // Определяем, является ли клик на этот элемент правильным для данного бага
            let isCorrect = false;
            const target = e.target;

            switch (bugType) {
                case 'wrong-link':
                    // Правильный клик: сам ссылка (она ведёт не туда)
                    isCorrect = target.matches('.bug-link');
                    break;
                case 'evading-button':
                    // Правильный клик: сама кнопка (она убегает при hover)
                    isCorrect = target.matches('.evade-btn');
                    break;
                case 'broken-theme':
                    // Правильный клик: чекбокс переключателя темы (он сломан)
                    isCorrect = target.matches('#theme-toggle');
                    break;
                case 'wrong-form-action':
                    // Правильный клик: кнопка отправки формы (она отправляет не туда)
                    isCorrect = target.matches('.submit-btn');
                    break;
                case 'unstoppable-modal':
                    // Правильный клик: кнопка открытия модального окна (оно не закрывается)
                    isCorrect = target.matches('.open-modal-btn');
                    break;
                case 'false-tooltip':
                    // Правильный клик: элемент с подсказкой (подсказка ложная)
                    isCorrect = target.matches('[data-bug-part="tooltip"]');
                    break;
                case 'stuck-checkbox':
                    // Правильный клик: сам чекбокс (он disabled, т.е. застрял)
                    isCorrect = target.matches('#stuck-checkbox');
                    break;
                case 'broken-counter':
                    // Правильный клик: кнопка счётчика (счётчик считает неправильно)
                    isCorrect = target.matches('.counter-btn');
                    break;
                default:
                    isCorrect = false;
            }

            if (isCorrect) {
                // Правильный клик
                score += 10;
                bugsFound.add(bugId);
                bugItem.classList.add('is-found');
                bugItem.classList.remove('is-suspected');
                // Для некоторых багов выполним побочные эффекты, чтобы показать, что они действительно баги
                applyBugEffect(bugType, target);
            } else {
                // Ошибочный клик
                score = Math.max(0, score - 5);
                bugItem.classList.add('is-suspected');
                setTimeout(() => {
                    if (!bugsFound.has(bugId)) {
                        bugItem.classList.remove('is-suspected');
                    }
                }, 1200);
            }

            updateUI();
        });

        // Функция для демонстрации бага после правильного клика (опционально)
        function applyBugEffect(bugType, element) {
            switch (bugType) {
                case 'wrong-link':
                    // Ниже ничего не делаем, просто показать, что ссылка ведёт не туда
                    break;
                case 'evading-button':
                    // Кнопка уже убегает при hover, ничего больше
                    break;
                case 'broken-theme':
                    // Показать, что переключатель не меняет тему
                    alert('Переключатель не меняет тему из‑за отсутствия обработчика.');
                    break;
                case 'wrong-form-action':
                    alert('Форма отправит данные на /wrong-endpoint, а не на нужный обработчик.');
                    break;
                case 'unstoppable-modal':
                    // Показать модальное окно
                    document.getElementById('modal-5').classList.add('show');
                    break;
                case 'false-tooltip':
                    alert('Подсказка говорит: “Это правильная подсказка”, но на самом деле она должна была бы говорить что‑то другое.');
                    break;
                case 'stuck-checkbox':
                    alert('Чекбокс отключён (disabled) и не может быть включён.');
                    break;
                case 'broken-counter':
                    // Увеличим счётчик на 2 вместо 1, чтобы показать ошибку
                    counterValue += 2;
                    document.getElementById('counter-display').textContent = counterValue;
                    alert('Счётчик увеличен на 2 вместо 1 – это баг.');
                    break;
            }
        }

        // Логика убегающей кнопки
        const evadeBtn = document.querySelector('.evade-btn');
        if (evadeBtn) {
            evadeBtn.addEventListener('mouseenter', function () {
                // Случайный сдвиг в пределах контейнера
                const container = evadeBtn.parentElement;
                const containerRect = container.getBoundingClientRect();
                const btnRect = evadeBtn.getBoundingClientRect();
                const maxX = containerRect.width - btnRect.width;
                const maxY = containerRect.height - btnRect.height;
                const newX = Math.random() * maxX;
                const newY = Math.random() * maxY;
                evadeBtn.style.position = 'relative';
                evadeBtn.style.left = `${newX}px`;
                evadeBtn.style.top = `${newY}px`;
            });
            evadeBtn.addEventListener('mouseleave', function () {
                evadeBtn.style.left = '';
                evadeBtn.style.top = '';
            });
        }

        // Логика сломанного переключателя темы (он не меняет стили)
        // Намеренно ничего не делаем – чтобы показать баг.

        // Логика формы с неправильным action – ничего не меняем, просто оставляем action="/wrong-endpoint"

        // Логика модального окна: при клике вне окна закрывать не будем (баг)
        const modalBackdrop = document.getElementById('modal-5');
        if (modalBackdrop) {
            // Обычно бы закрывали при клике вне окна, но мы этого не делаем => баг
            // Ниже ничего не делаем.
        }

        // Логика счётчика: делаем так, чтобы при клике увеличивался на 2 (уже сделано в applyBugEffect)
        const counterBtn = document.querySelector('.counter-btn');
        if (counterBtn) {
            counterBtn.addEventListener('click', function () {
                // Увеличиваем на 1, но в applyBugEffect мы добавим ещё 1 => итого +2
                counterValue += 1;
                document.getElementById('counter-display').textContent = counterValue;
            });
        }

        updateUI();
    });
</script>
@endsection
