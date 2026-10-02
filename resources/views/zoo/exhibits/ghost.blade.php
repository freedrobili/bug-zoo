<x-zoo.exhibit :bug="$bug">
    <button type="button" class="btn" id="openModal">Открыть окно</button>
</x-zoo.exhibit>

<div class="modal" id="modal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="modal__box">
        <h3 id="modalTitle">Призрак ещё здесь</h3>
        <p>Если окно сразу исчезло — баг уже воспроизведён.</p>
        <button type="button" class="btn" id="closeModal">Закрыть</button>
    </div>
</div>
