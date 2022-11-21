<?php

namespace App\Http\Livewire;
//Componenst
use Livewire\WithFileUploads;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


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
    public $data_kegiatan;
    public $data_mapbox;
    //Public Variabel Kunjungan Kerja
    public $data_titik, $long, $lat, $vvip, $nama_vvip, $tgl_berangkat, $tgl_pulang, $kegiatan, $nama_kegiatan, $file_ebook;

    public function save_kunker(){
        $this->validate([
            'data_titik' => 'required',
            'long' => 'required',
            'lat' => 'required',
            'nama_vvip' => 'required',
            'tgl_berangkat' => 'required',
            'tgl_pulang' => 'required',
            'nama_kegiatan' => 'required',
            'kegiatan' => 'required',
            'nama_kegiatan' => 'required',
            'file_ebook' => 'file|mimes:png,jpg,pdf|max:12288'
        ]);

        Kunjungan_kerja::create([
            'data_titik' => $this->data_titik,
            'long' => $this->long,
            'lat' => $this->lat,
            'nama_vvip' => $this->nama_vvip,
            'tgl_berangkat' => $this->tgl_berangkat,
            'tgl_pulang' => $this->tgl_pulang,
            'nama_kegiatan' => $this->nama_kegiatan,
            'file_ebook' => $this->file_ebook->store('files','public'),
        ]);

        $id = Kunjungan_kerja::max('id');

        foreach ($this->kegiatan as $keg) {
            Kegiatan_kunker::create([
                'id_kegiatan' => $keg,
                'id_kunker' => $id,
            ]);
        }

        $this->clearForm();
        session()->flash('message', 'Data Berhasil Disimpan');
    }

    private function clearForm(){
        $this->data_titik = '';
        $this->long = '';
        $this->lat = '';
        $this->nama_vvip = '';
        $this->tgl_berangkat = '';
        $this->tgl_pulang = '';
        $this->kegiatan = '';
        $this->nama_kegiatan = '';
    }
    public function render()
    {
        $this->data_kegiatan = Kegiatan::get();
        return view('livewire.kunjungan-kerja')
        ->layout('master');
    }
}
