<?php

namespace Tests\Feature;

use App\Models\KategoriVoting;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class KategoriVotingControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_kategori_voting()
    {
        KategoriVoting::factory()->count(3)->create();
        $response = $this->get(route('kategori_voting.index'));
        $response->assertStatus(200)->assertViewHas('kategori_voting');
    }

    public function test_store_creates_kategori_voting()
    {
        $data = [
            'kategori' => 'RT',
        ];

        $response = $this->post(route('kategori_voting.store'), $data);
        $response->assertRedirect(route('kategori_voting.index'));
        $this->assertDatabaseHas('kategori_voting', $data);
    }

    public function test_update_edits_kategori_voting()
    {
        $kategoriVoting = KategoriVoting::factory()->create();
        $data = [
            'kategori' => 'RW',
        ];

        $response = $this->put(route('kategori_voting.update', $kategoriVoting->id), $data);
        $response->assertRedirect(route('kategori_voting.index'));
        $this->assertDatabaseHas('kategori_voting', $data);
    }

    public function test_destroy_deletes_kategori_voting()
    {
        $kategoriVoting = KategoriVoting::factory()->create();
        $response = $this->delete(route('kategori_voting.destroy', $kategoriVoting->id));
        $response->assertRedirect(route('kategori_voting.index'));
        $this->assertDatabaseMissing('kategori_voting', ['id' => $kategoriVoting->id]);
    }
}

