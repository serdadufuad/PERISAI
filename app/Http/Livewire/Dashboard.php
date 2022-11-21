<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kunjungan_kerja;
use Carbon\Carbon;

class Dashboard extends Component
{
    //Dalam Negeri
    public $long_min_dn = 94.9111171;
    public $lat_min_dn = -11.1045868;
    public $long_max_dn = 141.0296490;
    public $lat_max_dn = 6.1748218;

    public $long, $lat;
    public $geoJson;

    private function loadLocations(){
        $locations = Kunjungan_kerja::orderBy('created_at', 'desc')->get();

        $customLocations = [];

        foreach ($locations as $location){
            $berangkat = Carbon::parse($location->tgl_berangkat)->format('d M Y');
            $pulang = Carbon::parse($location->tgl_pulang)->format('d M Y');
            $customLocations[] = [
                'type' => 'Feature',
                'geometry' => [
                    'coordinates' => [$location->long, $location->lat],
                    'type' => 'Point'
                ],
                'properties' => [
                    'locationId' => $location->id,
                    'data_titik' => $location->data_titik,
                    'nama_vvip' => $location->nama_vvip,
                    'tgl_berangkat' => $berangkat,
                    'tgl_pulang' => $pulang,
                    'nama_kegiatan' => $location->nama_kegiatan,
                    'file_ebook' => $location->file_ebook,
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
        return view('livewire.dashboard')
        ->layout('master');
    }
}
