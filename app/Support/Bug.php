<?php

namespace App\Support;

final readonly class Bug
{
    /**
     * @param  array{id: int, slug: string, emoji: string, animal: string, category: string, title: string, prompt: string, answer: string}  $bug
     */
    public static function fromConfig(array $bug): self
    {
        return new self(
            id: $bug['id'],
            slug: $bug['slug'],
            emoji: $bug['emoji'],
            animal: $bug['animal'],
            category: $bug['category'],
            title: $bug['title'],
            prompt: $bug['prompt'],
            answer: $bug['answer'],
        );
    }

    public function __construct(
        public int $id,
        public string $slug,
        public string $emoji,
        public string $animal,
        public string $category,
        public string $title,
        public string $prompt,
        public string $answer,
    ) {}

    public function paddedId(): string
    {
        return sprintf('%02d', $this->id);
    }

    public function exhibitView(): string
    {
        return 'zoo.exhibits.'.$this->slug;
    }
}
