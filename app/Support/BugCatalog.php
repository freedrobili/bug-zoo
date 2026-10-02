<?php

namespace App\Support;

use Illuminate\Support\Collection;

class BugCatalog
{
    /**
     * @return Collection<int, Bug>
     */
    public function all(): Collection
    {
        /** @var array<int, array{id: int, slug: string, emoji: string, animal: string, category: string, title: string, prompt: string, answer: string}> $bugs */
        $bugs = config('zoo.bugs', []);

        return collect($bugs)
            ->map(fn (array $bug): Bug => Bug::fromConfig($bug))
            ->values();
    }

    /**
     * @return Collection<int, string>
     */
    public function categories(): Collection
    {
        return $this->all()
            ->pluck('category')
            ->unique()
            ->values();
    }
}
