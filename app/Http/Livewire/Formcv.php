<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Formcv extends Component
{
    use WithFileUploads;

    public $nama;
    public $foto;
    public $deskripsi;
    public $email;
    public $alamat;
    public $nomor_telp;
    public $website;
    public $linkedin;
    public $kota;
    public $kode_pos;
    public $tanggal_lahir;
    public $tempat_lahir;
    public $sim;
    public $jenis_kelamin;
    public $input_pendidikan = [];
    public $n_input_pendidikan = 0;
    public $sekolah = ["SMPN 9 Purwokerto", "", "", "", "", "", "", "", "", "", "", ""];
    public $tahun_masuk_pendidikan = ["2014", "", "", "", "", "", "", "", "", "", "", ""];
    public $tahun_lulus_pendidikan = ["2017", "", "", "", "", "", "", "", "", "", "", ""];
    public $input_keahlian = [];
    public $n_input_keahlian = 0;
    public $nama_keahlian = ["HTML", "", "", "", "", "", "", "", "", "", "", "", ""];
    public $input_pengalaman = [];
    public $n_input_pengalaman = 0;
    public $pengalaman = ["Social Media Marketing ABC Management", "Social Media Marketing XYZ Food Company"];
    public $tahun_masuk_pengalaman = ["2014", "2017", "", "", "", "", "", "", "", "", "", ""];
    public $tahun_selesai_pengalaman = ["2017", "2020", "", "", "", "", "", "", "", "", "", ""];
    public $deskripsi_pengalaman = ["Creating meaningful content for the viewers, raise followers to 50k in 5 months, increase engagement ratings by up to 30% in 2 months", "Responsible for selecting KOL, influencers, and celebrities to be the company's Brand Ambassador, Hold social media campaign to promote healthy eating, Brainstroming with the team for the company's advertisement and social media content", "", "", "", "", "", "", ""];
    public $input_organisasi = [];
    public $n_input_organisasi = 0;
    public $organisasi = ["Producer of PENTAS PANAS Teater", "Secretary of Nusa Indah Liliteracy Learning Group", "", "", "", "", "", "", "", "", "", ""];
    public $tahun_masuk_organisasi =  ["2014", "2017", "", "", "", "", "", "", "", "", "", ""];
    public $tahun_selesai_organisasi = ["2017", "2020", "", "", "", "", "", "", "", "", "", ""];
    public $template;


    public function add($type, $i)
    {
        if ($type == "pendidikan") {
            $i = $i + 1;
            $this->n_input_pendidikan = $i;
            array_push($this->input_pendidikan, $i);
        } else if ($type == "keahlian") {
            $i = $i + 1;
            $this->n_input_keahlian = $i;
            array_push($this->input_keahlian, $i);
        } else if ($type == "pengalaman") {
            $i = $i + 1;
            $this->n_input_pengalaman = $i;
            array_push($this->input_pengalaman, $i);
        } else if ($type = "organisasi") {
            $i = $i + 1;
            $this->n_input_organisasi = $i;
            array_push($this->input_organisasi, $i);
        }
    }


    public function remove($type, $i)
    {
        if ($type == "pendidikan") {
            $this->sekolah[$i + 1] = "";
            $this->tahun_masuk_pendidikan[$i + 1] = "";
            $this->tahun_lulus_pendidikan[$i + 1] = "";
        } else if ($type == "keahlian") {
            $this->nama_keahlian[$i + 1] = "";
        } else if ($type == "pengalaman") {
            $this->pengalaman[$i + 1] = "";
            $this->tahun_masuk_pengalaman[$i + 1] = "";
            $this->tahun_selesai_pengalaman[$i + 1] = "";
            $this->deskripsi_pengalaman[$i + 1] = "";
        } else if ($type == "organisasi") {
            $this->organisasi[$i + 1] = "";
            $this->tahun_masuk_organisasi[$i + 1] = "";
            $this->tahun_selesai_organisasi[$i + 1] = "";
        }
    }

    public function render()
    {
        return view('livewire.formcv', ['nama' => $this->nama]);
    }
}
