@props(['bug'])

<article {{ $attributes->merge([
    'class' => 'exhibit',
    'id' => 'exhibit-'.$bug->slug,
    'data-bug' => (string) $bug->id,
    'data-slug' => $bug->slug,
]) }}>
    <header class="exhibit__head">
        <div class="exhibit__meta">
            <span class="exhibit__index">{{ $bug->paddedId() }}</span>
            <span class="exhibit__cat">{{ $bug->category }}</span>
            <span class="exhibit__mark" aria-hidden="true">{{ $bug->emoji }}</span>
        </div>
        <h2 class="exhibit__title">{{ $bug->animal }} · {{ $bug->title }}</h2>
        <p class="exhibit__prompt">{{ $bug->prompt }}</p>
    </header>
    <div class="exhibit__body">
        {{ $slot }}
    </div>
</article>
