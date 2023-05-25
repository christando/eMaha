<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Artikel;

class CardArtikel extends Component
{
    public function render()
    {
        $art = Artikel::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.card-artikel', ['art'=> $art]);
    }
}
