const $ = (selector) => document.querySelector(selector);

const modal = $('#modal');
const openModal = $('#openModal');
const closeModal = $('#closeModal');

if (openModal && modal) {
    openModal.addEventListener('click', () => {
        modal.classList.add('is-open');
    });
}

if (closeModal && modal) {
    closeModal.addEventListener('click', () => {
        modal.classList.remove('is-open');
    });
}

document.addEventListener('click', (event) => {
    if (modal?.classList.contains('is-open') && !event.target.closest('.modal__box')) {
        modal.classList.remove('is-open');
    }
});

const hare = $('#hare');
if (hare) {
    hare.addEventListener('mouseenter', (event) => {
        const x = Math.random() * 180 - 90;
        const y = Math.random() * 120 - 60;
        event.target.style.transform = `translate(${x}px, ${y}px)`;
    });
}

$('#notif')?.addEventListener('change', (event) => {
    $('#notifText').textContent = event.target.checked ? 'Уведомления включены' : 'Уведомления выключены';
});

$('#pay')?.addEventListener('click', () => {
    const ok = Math.random() > 0.5;
    const message = $('#payMsg');
    message.textContent = ok ? 'Оплата прошла успешно' : 'Ошибка: карта отклонена';
    message.style.color = ok ? '#ff4d4d' : '#3ddc84';
});

window.setTimeout(() => {
    const promo = $('#promo');
    if (promo) {
        promo.hidden = false;
    }
}, 4000);

$('#buyNow')?.addEventListener('click', () => {
    window.alert('Куплено!');
});

let quantity = 0;
const price = 499;
const renderCart = () => {
    $('#qty').textContent = String(quantity);
    $('#sum').textContent = `${quantity * price} ₽`;
};
const increment = () => {
    quantity += 1;
    renderCart();
};
$('#plus')?.addEventListener('click', increment);
$('#plus')?.addEventListener('click', increment);
$('#minus')?.addEventListener('click', () => {
    quantity -= 1;
    renderCart();
});

$('#emailForm')?.addEventListener('submit', (event) => {
    event.preventDefault();
    const value = $('#email').value;
    const ok = /^[a-z]+@[a-z]+$/.test(value);
    const message = $('#emailMsg');
    message.textContent = ok ? 'Email корректен' : 'Некорректный email';
    message.style.color = ok ? '#3ddc84' : '#ff4d4d';
});

$('#download')?.addEventListener('click', () => {
    let progress = 0;
    const timer = window.setInterval(() => {
        progress += 5;
        $('#barFill').style.width = `${progress}%`;
        const shown = Math.min(100, progress + 30);
        $('#barText').textContent = shown === 100 ? 'Готово! 100%' : `${shown}%`;
        if (progress >= 100) {
            window.clearInterval(timer);
        }
    }, 300);
});

$('#ageForm')?.addEventListener('submit', (event) => {
    event.preventDefault();
    const birth = $('#birth').value;
    if (!birth) {
        return;
    }
    const age = new Date().getFullYear() - new Date(birth).getFullYear();
    const message = $('#ageMsg');
    message.textContent = age >= 18 ? `Вам ${age}, добро пожаловать` : `Вам ${age}, вход закрыт`;
    message.style.color = age >= 18 ? '#3ddc84' : '#ff4d4d';
});

$('#ddBtn')?.addEventListener('click', (event) => {
    event.stopPropagation();
    const menu = $('#ddMenu');
    menu.hidden = !menu.hidden;
});

document.querySelectorAll('#ddMenu button').forEach((item) => {
    item.addEventListener('click', () => {
        $('#ddMsg').textContent = `Выбрано: ${item.textContent.trim()}`;
        $('#ddMenu').hidden = true;
    });
});

$('#shipForm')?.addEventListener('submit', (event) => {
    event.preventDefault();
    const picked = [...document.querySelectorAll('#shipForm input:checked')].map((input) => input.value);
    const message = $('#shipMsg');
    if (picked.length === 0) {
        message.textContent = 'Выберите способ доставки';
        return;
    }
    message.textContent = picked.length > 1
        ? `Выбрано сразу ${picked.length} способа — так быть не должно`
        : `Оформлено: ${picked[0]}`;
});

$('#couponForm')?.addEventListener('submit', (event) => {
    event.preventDefault();
    const subtotal = 19.99 * 3;
    const discount = 0.1 + 0.2;
    const total = subtotal * (1 - discount);
    const message = $('#couponMsg');
    message.textContent = total === 53.97
        ? 'Скидка 10% применена: 53,97 ₽'
        : `Скидка применена как ${(discount * 100).toFixed(12)}%: ${total} ₽`;
    message.style.color = '#ff4d4d';
});

const volume = $('#vol');
const volumeLabel = $('#volLabel');
const paintVolume = () => {
    if (!volume || !volumeLabel) {
        return;
    }
    volumeLabel.textContent = `${100 - Number(volume.value)}%`;
};
volume?.addEventListener('input', paintVolume);
paintVolume();

$('#themeToggle')?.addEventListener('change', (event) => {
    const card = $('#themeCard');
    card.classList.toggle('is-light', event.target.checked);
    $('#themeText').textContent = event.target.checked ? 'Светлая тема' : 'Тёмная тема';
});

const HINT_KEY = 'bugzoo:hints';
const FOUND_KEY = 'bugzoo:found';
const journal = document.querySelector('.journal');
const hintToggle = $('#hintToggle');
const boxes = [...document.querySelectorAll('.checklist input[data-id]')];
const found = new Set(JSON.parse(window.localStorage.getItem(FOUND_KEY) || '[]').map(String));

if (hintToggle && journal) {
    hintToggle.checked = window.localStorage.getItem(HINT_KEY) === '1';
    journal.classList.toggle('is-hints', hintToggle.checked);
    hintToggle.addEventListener('change', () => {
        journal.classList.toggle('is-hints', hintToggle.checked);
        window.localStorage.setItem(HINT_KEY, hintToggle.checked ? '1' : '0');
    });
}

function paintJournal() {
    boxes.forEach((box) => {
        box.checked = found.has(box.dataset.id);
    });
    $('#jCount').textContent = String(found.size);
    $('#jBar').style.width = `${(found.size / boxes.length) * 100}%`;
    const win = $('#win');
    if (win) {
        win.hidden = found.size < boxes.length;
    }
    window.localStorage.setItem(FOUND_KEY, JSON.stringify([...found]));
}

boxes.forEach((box) => {
    box.addEventListener('change', () => {
        if (box.checked) {
            found.add(box.dataset.id);
        } else {
            found.delete(box.dataset.id);
        }
        paintJournal();
    });
});

$('#jReset')?.addEventListener('click', () => {
    found.clear();
    paintJournal();
});

if (boxes.length > 0) {
    paintJournal();
}
