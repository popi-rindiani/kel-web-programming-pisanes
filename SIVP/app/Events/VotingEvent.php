<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class VotingEvent
{
    use Dispatchable, SerializesModels;

    public $pemilih_id;
    public $kategori_voting;
    public $calon_id;

    public function __construct($pemilih_id, $kategori_voting, $calon_id)
    {
        $this->pemilih_id = $pemilih_id;
        $this->kategori_voting = $kategori_voting;
        $this->calon_id = $calon_id;
    }
}
