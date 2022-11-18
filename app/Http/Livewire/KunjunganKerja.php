<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Kunjungan_kerja;

class KunjunganKerja extends Component
{
    //Dalam Negeri
    public $long_min_dn = 94.9111171;
    public $lat_min_dn = -11.1045868;
    public $long_max_dn = 141.0296490;
    public $lat_max_dn = 6.1748218;

    public $long, $lat, $titik;
    public $geoJson;

    private function loadLocations(){
        $locations = Kunjungan_kerja::orderBy('created_at', 'desc')->get();

        $customLocations = [];

        foreach ($locations as $location){
            $customLocations[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$location->long, $location->lat],
                    'type' => 'Point'
                ],
                'properties' => [
                    'locationId' => $location->id,
                    'title' => $location->kategori_kunjungan,
                    'image' => $location->file_ebook,
                    'description' => $location->vvip
                ]
                ];
        }

        $geoLocation =[
            'type' => 'FeatureCollection',
            'features' => $customLocations
        ];

        $geoJson = collect($geoLocation)->toJson();
        $this->geoJson = $geoJson;
    }


    public function render()
    {
        $this->loadLocations();
        return view('livewire.kunjungan-kerja')
        ->layout('master');
    }
}
