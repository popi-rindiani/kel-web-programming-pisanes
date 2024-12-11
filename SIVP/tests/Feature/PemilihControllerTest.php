<?php

namespace Tests\Feature;

use App\Models\Pemilih;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PemilihControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_pemilih()
    {
        Pemilih::factory()->count(3)->create();
        $response = $this->get(route('pemilih.index'));
        $response->assertStatus(200)->assertViewHas('pemilih');
    }

    public function test_store_creates_pemilih()
    {
        $data = [
            'nama_pemilih' => 'John Doe',
            'email' => 'john@example.com',
            'alamat' => 'Jl. Contoh No.1',
            'no_telepon' => '08123456789',
            'status_voting' => false,
        ];

        $response = $this->post(route('pemilih.store'), $data);
        $response->assertRedirect(route('pemilih.index'));
        $this->assertDatabaseHas('pemilih', $data);
    }

    public function test_update_edits_pemilih()
    {
        $pemilih = Pemilih::factory()->create();
        $data = [
            'nama_pemilih' => 'Jane Doe',
            'email' => 'jane@example.com',
        ];

        $response = $this->put(route('pemilih.update', $pemilih->id), $data);
        $response->assertRedirect(route('pemilih.index'));
        $this->assertDatabaseHas('pemilih', $data);
    }

    public function test_destroy_deletes_pemilih()
    {
        $pemilih = Pemilih::factory()->create();
        $response = $this->delete(route('pemilih.destroy', $pemilih->id));
        $response->assertRedirect(route('pemilih.index'));
        $this->assertDatabaseMissing('pemilih', ['id' => $pemilih->id]);
    }
}
