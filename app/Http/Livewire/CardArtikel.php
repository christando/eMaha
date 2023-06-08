<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Artikel;

class CardArtikel extends Component
{

    protected $listeners = ['indexArtikel'];

    public function render()
    {
        $art = Artikel::orderBy('id', 'desc')->limit(1)->get();
        return view('livewire.card-artikel', ['art'=> $art]);
    }
    public function indexArtikel($artikel)
    {
        // dd($artikel);
    }
}
