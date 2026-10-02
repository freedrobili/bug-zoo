<?php

namespace Tests\Feature;

use Tests\TestCase;

class ZooIndexTest extends TestCase
{
    public function test_home_renders_the_bug_zoo_without_a_host_key(): void
    {
        $response = $this->get(route('zoo.index'));

        $response->assertOk();
        $response->assertSee('Живой зоопарк багов');
        $response->assertSee('без ключей');
        $response->assertDontSee('host_key');
        $response->assertSee('Призрак · Модальное окно');
        $response->assertSee('Способ доставки');
        $response->assertSee('Громкость');
    }

    public function test_answers_are_in_the_page_for_the_local_hint_toggle(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $response->assertSee('Клик по «Открыть» всплывает', false);
    }
}
