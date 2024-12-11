<?php

namespace Tests\Feature;

use App\Models\Calon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CalonControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_calon()
    {
        Calon::factory()->count(3)->create();
        $response = $this->get(route('calon.index'));
        $response->assertStatus(200)->assertViewHas('calon');
    }

    public function test_store_creates_calon()
    {
        $data = [
            'nama_calon' => 'Calon 1',
            'kategori' => 'RT',
            'status' => true,
        ];

        $response = $this->post(route('calon.store'), $data);
        $response->assertRedirect(route('calon.index'));
        $this->assertDatabaseHas('calon', $data);
    }

    public function test_update_edits_calon()
    {
        $calon = Calon::factory()->create();
        $data = [
            'nama_calon' => 'Calon Updated',
            'kategori' => 'RW',
            'status' => false,
        ];

        $response = $this->put(route('calon.update', $calon->id), $data);
        $response->assertRedirect(route('calon.index'));
        $this->assertDatabaseHas('calon', $data);
    }

    public function test_destroy_deletes_calon()
    {
        $calon = Calon::factory()->create();
        $response = $this->delete(route('calon.destroy', $calon->id));
        $response->assertRedirect(route('calon.index'));
        $this->assertDatabaseMissing('calon', ['id' => $calon->id]);
    }
}

