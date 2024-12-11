<?php

namespace Tests\Feature;

use App\Models\Pengaturan;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PengaturanControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_pengaturan()
    {
        Pengaturan::factory()->count(3)->create();
        $response = $this->get(route('pengaturan.index'));
        $response->assertStatus(200)->assertViewHas('pengaturan');
    }

    public function test_store_creates_pengaturan()
    {
        $data = [
            'nama_pengaturan' => 'Nama Pengaturan 1',
            'nilai_pengaturan' => 'Nilai Pengaturan 1',
        ];

        $response = $this->post(route('pengaturan.store'), $data);
        $response->assertRedirect(route('pengaturan.index'));
        $this->assertDatabaseHas('pengaturan', $data);
    }

    public function test_update_edits_pengaturan()
    {
        $pengaturan = Pengaturan::factory()->create();
        $data = [
            'nama_pengaturan' => 'Nama Pengaturan Update',
            'nilai_pengaturan' => 'Nilai Pengaturan Update',
        ];

        $response = $this->put(route('pengaturan.update', $pengaturan->id), $data);
        $response->assertRedirect(route('pengaturan.index'));
        $this->assertDatabaseHas('pengaturan', $data);
    }

    public function test_destroy_deletes_pengaturan()
    {
        $pengaturan = Pengaturan::factory()->create();
        $response = $this->delete(route('pengaturan.destroy', $pengaturan->id));
        $response->assertRedirect(route('pengaturan.index'));
        $this->assertDatabaseMissing('pengaturan', ['id' => $pengaturan->id]);
    }
}
