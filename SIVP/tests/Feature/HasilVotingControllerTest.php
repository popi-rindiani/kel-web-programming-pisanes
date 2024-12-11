<?php

namespace Tests\Feature;

use App\Models\HasilVoting;
use App\Models\Pemilih;
use App\Models\Calon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HasilVotingControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_hasil_voting()
    {
        HasilVoting::factory()->count(3)->create();
        $response = $this->get(route('hasil_voting.index'));
        $response->assertStatus(200)->assertViewHas('hasil_voting');
    }

    public function test_store_creates_hasil_voting()
    {
        $pemilih = Pemilih::factory()->create();
        $calon = Calon::factory()->create();

        $data = [
            'pemilih_id' => $pemilih->id,
            'calon_id' => $calon->id,
            'kategori_voting' => 'RT',
            'status_voting' => true,
        ];

        $response = $this->post(route('hasil_voting.store'), $data);
        $response->assertRedirect(route('hasil_voting.index'));
        $this->assertDatabaseHas('hasil_voting', $data);
    }

    public function test_update_edits_hasil_voting()
    {
        $hasilVoting = HasilVoting::factory()->create();
        $data = [
            'status_voting' => false,
        ];

        $response = $this->put(route('hasil_voting.update', $hasilVoting->id), $data);
        $response->assertRedirect(route('hasil_voting.index'));
        $this->assertDatabaseHas('hasil_voting', $data);
    }

    public function test_destroy_deletes_hasil_voting()
    {
        $hasilVoting = HasilVoting::factory()->create();
        $response = $this->delete(route('hasil_voting.destroy', $hasilVoting->id));
        $response->assertRedirect(route('hasil_voting.index'));
        $this->assertDatabaseMissing('hasil_voting', ['id' => $hasilVoting->id]);
    }
}

