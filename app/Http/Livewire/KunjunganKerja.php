<?php

namespace App\Http\Livewire;
use Livewire\Component;

class KunjunganKerja extends Component
{
    public $long, $lat;
    public function render()
    {
        return view('livewire.kunjungan-kerja')
        ->layout('master');
    }
}
