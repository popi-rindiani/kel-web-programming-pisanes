<?php

namespace Tests\Feature;

use App\Models\Pengguna;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PenggunaControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_pengguna()
    {
        // Buat beberapa pengguna
        Pengguna::factory()->count(5)->create();

        // Kirim permintaan ke endpoint index
        $response = $this->get(route('pengguna.index'));

        // Periksa apakah statusnya OK
        $response->assertStatus(200);

        // Pastikan data pengguna ditampilkan di view
        $response->assertViewHas('pengguna');
    }

    /** @test */
    public function it_can_create_a_new_pengguna()
    {
        $data = [
            'nama' => 'John Doe',
            'email' => 'john.doe@example.com',
            'role' => 'admin',
        ];

        // Kirim POST request ke store
        $response = $this->post(route('pengguna.store'), $data);

        // Periksa apakah diarahkan ke halaman index
        $response->assertRedirect(route('pengguna.index'));

        // Pastikan data tersimpan di database
        $this->assertDatabaseHas('pengguna', $data);
    }

    /** @test */
    public function it_can_update_existing_pengguna()
    {
        $pengguna = Pengguna::factory()->create();

        $data = [
            'nama' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'role' => 'masyarakat',
        ];

        // Kirim PUT request ke update
        $response = $this->put(route('pengguna.update', $pengguna->id), $data);

        // Periksa apakah diarahkan ke halaman index
        $response->assertRedirect(route('pengguna.index'));

        // Pastikan data di database diperbarui
        $this->assertDatabaseHas('pengguna', $data);
    }

    /** @test */
    public function it_can_delete_pengguna()
    {
        $pengguna = Pengguna::factory()->create();

        // Kirim DELETE request ke destroy
        $response = $this->delete(route('pengguna.destroy', $pengguna->id));

        // Periksa apakah diarahkan ke halaman index
        $response->assertRedirect(route('pengguna.index'));

        // Pastikan data di database dihapus
        $this->assertDatabaseMissing('pengguna', ['id' => $pengguna->id]);
    }
}

