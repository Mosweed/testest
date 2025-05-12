<?php

namespace Tests\Unit;

use App\Models\District;
use App\Models\Effect;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class DistrictUnitTest extends TestCase
{
     use RefreshDatabase;

    #[Test]
    public function test_can_create_district_instance()
    {
        $district = new District([
            'name' => 'Test District',
            'category' => 'Safety',
            'image_path' => 'path/to/image.jpg',
        ]);

        $this->assertInstanceOf(District::class, $district);
        $this->assertEquals('Test District', $district->name);
        $this->assertEquals('Safety', $district->category);
        $this->assertEquals('path/to/image.jpg', $district->image_path);
    }

    #[Test]

    public function test_can_create_effect_instance()
    {
        $effect = new Effect([
            'name' => 'Test Effect',
            'description' => 'This is a test effect.',
            'color' => '#FFFFFF',
        ]);

        $this->assertInstanceOf(Effect::class, $effect);
        $this->assertEquals('Test Effect', $effect->name);
        $this->assertEquals('This is a test effect.', $effect->description);
        $this->assertEquals('#FFFFFF', $effect->color);
    }

    #[Test]
    public function test_district_belongs_to_effect()
    {
        $district = District::factory()->create();
        $effect = Effect::factory()->create();

        $district->effects()->attach($effect, ['value' => 10]);

        $this->assertCount(1, $district->effects);
        $this->assertEquals(10, $district->effects()->first()->pivot->value);
    }


    #[Test]
    public function test_district_update()
    {
        $district = District::factory()->create([
            'name' => 'Old Name',
            'category' => 'Safety',
            'image_path' => 'path/to/old_image.jpg',
        ]);

        $district->update([
            'name' => 'New Name',
            'category' => 'Recreation',
            'image_path' => 'path/to/new_image.jpg',
        ]);

        $this->assertEquals('New Name', $district->name);
        $this->assertEquals('Recreation', $district->category);
        $this->assertEquals('path/to/new_image.jpg', $district->image_path);
    }


    #[Test]

    public function test_district_delete()
    {
        $district = District::factory()->create();

        $this->assertDatabaseHas('districts', ['id' => $district->id]);

        $district->delete();

        $this->assertDatabaseMissing('districts', ['id' => $district->id]);
    }




}
