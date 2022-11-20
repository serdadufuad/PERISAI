<?php

namespace App\Http\Livewire;
//Componenst
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

//Models
use App\Models\Kunjungan_kerja;
use App\Models\Kegiatan_kunker;
use App\Models\Kegiatan;
use App\Models\Country;
use App\Models\Region;
use App\Models\District;
use App\Models\Place;
use App\Models\Locality;
use App\Models\Postcode;
use App\Models\Neighborhood;
use App\Models\Poi;

class KunjunganKerja extends Component
{
    use WithFileUploads;
    public $geoJson;
    public $data_kegiatan;
    //Public Variabel Kunjungan Kerja
    public $long, $lat, $data_titik, $vvip, $tgl_berangkat, $tgl_pulang, $nama_kegiatan, $file_ebook;
    //Public Kunjungan Kerja( #_id ), Variabel Country, Region, District, Place, Locality, Postcode, Neighborhood, Poi
    public $country_bbox, $country_center, $country_id, $country_palce_name, $country_place_type;
    public $region_bbox, $region_center, $region_id, $region_palce_name, $region_place_type;
    public $district_bbox, $district_center, $district_id, $district_palce_name, $district_place_type;
    public $place_bbox, $place_center, $place_id, $place_palce_name, $place_place_type;
    public $locality_bbox, $locality_center, $locality_id, $locality_palce_name, $locality_place_type;
    public $postcode_bbox, $postcode_center, $postcode_id, $postcode_palce_name, $postcode_place_type;
    public $neighborhood_bbox, $neighborhood_center, $neighborhood_id, $neighborhood_palce_name, $neighborhood_place_type;
    public $poi_bbox, $poi_center, $poi_id, $poi_palce_name, $poi_place_type;

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

    public function save_kunker(){
        $this->validate([
            'data_titik' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'file_ebook' => 'file|mimes:pdf|max:5120|required',
        ]);
        $file_name = md5($this->file_ebook.microtime()).$this->data_titik.$this->tgl_berangkat.$this->tgl_pulang.'.'.$this->file_ebook->extension();
        Storage::putFileAs(
            'public/files',
            $this->$file_ebook,
            $file_name
        );

        Kunjungan_kerja::create([
            //Data Form
            'data_titik' => $this->data_titik,
            'long' => $this->long,
            'lat' => $this->lat,
            'vvip' => $this->vvip,
            'tgl_berangkat' => $this->tgl_berangkat,
            'tgl_pulang' => $this->tgl_pulang,
            'nama_kegiatan' => $this->nama_kegiatan,
            'file_ebook' => $this->file_name,
            //Data Mapbpx or Geocoder
            'id_country' => $this->country_id,
            'nama_country' => $this->country_place_name,
            'center_long_country' => $this->country_center[0],
            'center_lat_country' => $this->country_center[1],
            'long_min_country' => $this->country_bbox[0],
            'lat_min_country' => $this->country_bbox[1],
            'long_max_country' => $this->country_bbox[2],
            'lat_max_country' => $this->country_bbox[3],

            'id_region' => $this->region_id,
            'nama_region' => $this->region_place_name,
            'center_long_region' => $this->region_center[0],
            'center_lat_region' => $this->region_center[1],
            'long_min_region' => $this->region_bbox[0],
            'lat_min_region' => $this->region_bbox[1],
            'long_max_region' => $this->region_bbox[2],
            'lat_max_region' => $this->region_bbox[3],

            'id_disctrict' => $this->district_id,
            'nama_disctrict' => $this->district_place_name,
            'center_long_disctrict' => $this->district_center[0],
            'center_lat_disctrict' => $this->district_center[1],
            'long_min_disctrict' => $this->district_bbox[0],
            'lat_min_disctrict' => $this->district_bbox[1],
            'long_max_disctrict' => $this->district_bbox[2],
            'lat_max_disctrict' => $this->district_bbox[3],

            'id_place' => $this->place_id,
            'nama_place' => $this->place_place_name,
            'center_long_place' => $this->place_center[0],
            'center_lat_place' => $this->place_center[1],
            'long_min_place' => $this->place_bbox[0],
            'lat_min_place' => $this->place_bbox[1],
            'long_max_place' => $this->place_bbox[2],
            'lat_max_place' => $this->place_bbox[3],

            'id_locality' => $this->locality_id,
            'nama_locality' => $this->locality_place_name,
            'center_long_locality' => $this->locality_center[0],
            'center_lat_locality' => $this->locality_center[1],
            'long_min_locality' => $this->locality_bbox[0],
            'lat_min_locality' => $this->locality_bbox[1],
            'long_max_locality' => $this->locality_bbox[2],
            'lat_max_locality' => $this->locality_bbox[3],

            'id_postcode' => $this->postcode_id,
            'nama_postcode' => $this->postcode_place_name,
            'center_long_postcode' => $this->postcode_center[0],
            'center_lat_postcode' => $this->postcode_center[1],
            'long_min_postcode' => $this->postcode_bbox[0],
            'lat_min_postcode' => $this->postcode_bbox[1],
            'long_max_postcode' => $this->postcode_bbox[2],
            'lat_max_postcode' => $this->postcode_bbox[3],

            'id_neighborhood' => $this->neighborhood_id,
            'nama_neighborhood' => $this->neighborhood_place_name,
            'center_long_neighborhood' => $this->neighborhood_center[0],
            'center_lat_neighborhood' => $this->neighborhood_center[1],
            'long_min_neighborhood' => $this->neighborhood_bbox[0],
            'lat_min_neighborhood' => $this->neighborhood_bbox[1],
            'long_max_neighborhood' => $this->neighborhood_bbox[2],
            'lat_max_neighborhood' => $this->neighborhood_bbox[3],

            'id_poi' => $this->poi_id,
            'nama_poi' => $this->poi_place_name,
            'center_long_poi' => $this->poi_center[0],
            'center_lat_poi' => $this->poi_center[1],
            'long_min_poi' => $this->poi_bbox[0],
            'lat_min_poi' => $this->poi_bbox[1],
            'long_max_poi' => $this->poi_bbox[2],
            'lat_max_poi' => $this->poi_bbox[3],
        ]);

        Kegiatan_kunker::create([
            'id_kunker' => $this->id,
            'id_kegaitan' => $this->kegiatan,
        ]);
        $this->clearForm();
    }

    private function clearForm(){
        //Data Form
        $this->data_titik = '';
        $this->long = '';
        $this->lat = '';
        $this->vvip = '';
        $this->tgl_berangkat = '';
        $this->tgl_pulang = '';
        $this->nama_kegiatan = '';
        $this->file_ebook = '';
    }
    public function render()
    {
        $this->loadLocations();
        $this->data_kegiatan = Kegiatan::get();
        return view('livewire.kunjungan-kerja')
        ->layout('master');
    }
}
