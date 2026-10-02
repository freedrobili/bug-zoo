@extends('layouts.app')

@section('title', config('app.name').' — найдите сбежавших багов')

@section('content')
    <section class="hero">
        <p class="hero__tag">Incident 0417 · release night</p>
        <h1 class="hero__title">Живой зоопарк багов</h1>
        <p class="hero__lead">
            После ночного релиза из интерфейса сбежали <strong>{{ $bugs->count() }} дефектов</strong>:
            цвет, тумблеры, формы, вёрстка и логика. Обойдите вольеры, воспроизведите странность
            и отметьте находку в журнале справа.
        </p>
        <ul class="hero__facts">
            <li>
                <span>Типы</span>
                <b>{{ $categories->count() }}</b>
            </li>
            <li>
                <span>Вольеры</span>
                <b>{{ $bugs->count() }}</b>
            </li>
            <li>
                <span>Сеть</span>
                <b>не нужна</b>
            </li>
        </ul>
    </section>

    <div class="stage">
        <section id="exhibits" class="pens" aria-label="Вольеры">
            @foreach ($bugs as $bug)
                @include($bug->exhibitView(), ['bug' => $bug])
            @endforeach
        </section>

        <aside class="journal" aria-label="Полевой журнал">
            <div class="journal__top">
                <h2>Журнал</h2>
                <label class="hint-toggle">
                    <input type="checkbox" id="hintToggle">
                    <span>Подсказки</span>
                </label>
            </div>
            <div class="meter" role="progressbar" aria-valuemin="0" aria-valuemax="{{ $bugs->count() }}" aria-valuenow="0">
                <i id="jBar"></i>
            </div>
            <p class="journal__count"><b id="jCount">0</b> / {{ $bugs->count() }} найдено</p>

            <ul class="checklist">
                @foreach ($bugs as $bug)
                    <li data-category="{{ $bug->category }}">
                        <label>
                            <input type="checkbox" data-id="{{ $bug->id }}">
                            <span class="ck"></span>
                            <span class="checklist__copy">
                                <b>{{ $bug->emoji }} {{ $bug->paddedId() }} · {{ $bug->animal }}</b>
                                <em>{{ $bug->category }}</em>
                            </span>
                        </label>
                        <p class="answer">{{ $bug->answer }}</p>
                    </li>
                @endforeach
            </ul>

            <button type="button" class="btn btn--ghost" id="jReset">Сбросить журнал</button>
            <p id="win" class="win" hidden>Все вольеры описаны. Можно разбирать причины.</p>
        </aside>
    </div>
@endsection
