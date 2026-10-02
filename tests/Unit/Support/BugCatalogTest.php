<?php

namespace Tests\Unit\Support;

use App\Support\BugCatalog;
use Tests\TestCase;

class BugCatalogTest extends TestCase
{
    public function test_catalog_maps_configured_exhibits_in_order(): void
    {
        $bugs = (new BugCatalog)->all();

        $this->assertSame(14, $bugs->count());
        $this->assertSame('ghost', $bugs->first()->slug);
        $this->assertSame('peacock', $bugs->last()->slug);
        $this->assertContains('Цвет', $bugs->pluck('category')->all());
        $this->assertContains('Тумблер', $bugs->pluck('category')->all());
        $this->assertContains('Логика', $bugs->pluck('category')->all());
        $this->assertContains('Форма', $bugs->pluck('category')->all());
    }
}
