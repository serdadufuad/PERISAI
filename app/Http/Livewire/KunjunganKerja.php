<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Kunjungan_kerja;

class KunjunganKerja extends Component
{
    public $long, $lat;

    //Dalam Negeri
    public $long_min_dn = 94.9111171;
    public $lat_min_dn = -11.1045868;
    public $long_max_dn = 141.0296490;
    public $lat_max_dn = 6.1748218;

    public function render()
    {
        return view('livewire.kunjungan-kerja')
        ->layout('master');
    }
}
