<?php

namespace Tests\Feature;

use App\Models\Laporan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LaporanControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_laporan()
    {
        Laporan::factory()->count(3)->create();
        $response = $this->get(route('laporan.index'));
        $response->assertStatus(200)->assertViewHas('laporan');
    }

    public function test_store_creates_laporan()
    {
        $data = [
            'judul' => 'Laporan 1',
            'isi' => 'Isi laporan pertama.',
        ];

        $response = $this->post(route('laporan.store'), $data);
        $response->assertRedirect(route('laporan.index'));
        $this->assertDatabaseHas('laporan', $data);
    }

    public function test_update_edits_laporan()
    {
        $laporan = Laporan::factory()->create();
        $data = [
            'judul' => 'Laporan Update',
            'isi' => 'Isi laporan yang telah diperbarui.',
        ];

        $response = $this->put(route('laporan.update', $laporan->id), $data);
        $response->assertRedirect(route('laporan.index'));
        $this->assertDatabaseHas('laporan', $data);
    }

    public function test_destroy_deletes_laporan()
    {
        $laporan = Laporan::factory()->create();
        $response = $this->delete(route('laporan.destroy', $laporan->id));
        $response->assertRedirect(route('laporan.index'));
        $this->assertDatabaseMissing('laporan', ['id' => $laporan->id]);
    }
}
