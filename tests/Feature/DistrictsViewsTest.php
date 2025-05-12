<?php

use App\Models\District;

it('can view the districts page', function () {

    $district = District::factory()->create();
    $response = $this->get('/districts');
    $response->assertStatus(200);

    $response->assertSee($district->name);

});
it('can view the districts page no results', function () {
    $response = $this->get('/districts');
    $response->assertStatus(200);
    $response->assertSee('No results found');
});



it('can view the districts page with search', function () {
    $district = District::factory()->create(['name' => 'Test District']);
    $response = $this->get('/districts?search=Test');
    $response->assertStatus(200);
    $response->assertSee($district->name);
    $response->assertDontSee('No results found');
});

it('can view the create district page', function () {
    $response = $this->get('/districts/create');
    $response->assertStatus(200);
});


it('can view the edit district page', function () {
    $district = District::factory()->create();
    $response = $this->get('/districts/' . $district->id . '/edit');
    $response->assertStatus(200);
});


it('can view the edit district page with effects', function () {
    $district = District::factory()->create();
    $response = $this->get('/districts/' . $district->id . '/edit');
    $response->assertStatus(200);
    $response->assertSee($district->name);
});
