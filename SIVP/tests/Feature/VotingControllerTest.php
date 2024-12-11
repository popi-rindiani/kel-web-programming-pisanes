<?php

namespace Tests\Feature;

use App\Models\Voting;
use App\Models\Pemilih;
use App\Models\Calon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class VotingControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_voting()
    {
        Voting::factory()->count(3)->create();
        $response = $this->get(route('voting.index'));
        $response->assertStatus(200)->assertViewHas('voting');
    }

    public function test_store_creates_voting()
    {
        $pemilih = Pemilih::factory()->create();
        $calon = Calon::factory()->create();

        $data = [
            'pemilih_id' => $pemilih->id,
            'calon_id' => $calon->id,
            'kategori_voting' => 'RT',
        ];

        $response = $this->post(route('voting.store'), $data);
        $response->assertRedirect(route('voting.index'));
        $this->assertDatabaseHas('voting', $data);
    }

    public function test_update_edits_voting()
    {
        $voting = Voting::factory()->create();
        $data = [
            'kategori_voting' => 'RW',
        ];

        $response = $this->put(route('voting.update', $voting->id), $data);
        $response->assertRedirect(route('voting.index'));
        $this->assertDatabaseHas('voting', $data);
    }

    public function test_destroy_deletes_voting()
    {
        $voting = Voting::factory()->create();
        $response = $this->delete(route('voting.destroy', $voting->id));
        $response->assertRedirect(route('voting.index'));
        $this->assertDatabaseMissing('voting', ['id' => $voting->id]);
    }
}
