<?php

namespace Tests\Feature;

use Tests\TestCase;

class DragEditorTest extends TestCase
{

    public function test_element_editor_page_loads()
    {
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertSee('Home Page');
    }
}