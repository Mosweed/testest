<?php

use App\Models\District;

it('loads the simulation page and shows District data from the database', function () {
    // Arrange: Maak een ziekenhuis aan
    District::factory()->create([
        'name' => 'Test Hospital'
    ]);

    // Act: Bezoek de pagina
    $response = $this->get('/');

    // Assert: Controleer of de pagina correct laadt en het ziekenhuis toont
    $response->assertStatus(200);
    $response->assertSee('Test Hospital');


});

// test if the simulation page loads with drop-zone
it('loads the simulation page with drop-zone', function () {
    // Act: Bezoek de pagina
    $response = $this->get('/');

    // Assert: Controleer of de pagina correct laadt en de drop-zone toont
    $response->assertStatus(200);
    $response->assertSee('class="empty item"', false);
});

it('shows exactly 12 empty item divs on the page', function () {
    $response = $this->get('/');

    $response->assertStatus(200);

    $html = $response->getContent();

    $count = substr_count($html, 'class="empty item"');

    expect($count)->toBe(12);
});