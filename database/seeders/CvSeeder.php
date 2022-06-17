<?php

namespace Database\Seeders;

use App\Models\Cv;
use App\Models\Hobi;
use App\Models\Keahlian;
use App\Models\Pendidikan;
use App\Models\Template;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Template::create([
            'nama' => 'monocrom',
            'type' => 'gratis',
            'harga' => 0
        ]);

        Template::create([
            'nama' => 'colorfull',
            'type' => 'gratis',
            'harga' => 15000
        ]);

        Cv::create([
            'template_id' => 1,
            'user_id' => 2,
            'nama_depan' => 'Deva',
            'nama_belakang' => 'Apriana',
            'email' => 'deva@gmail.com',
            'nomor_telp' => '085910680017',
            'alamat' => 'Purwokerto, Jl.Kenanga no 27',
            'kota' => 'Purwokerto',
            'kode_pos' => '53122',
            'tanggal_lahir' => '2002-04-27',
            'tempat_lahir' => 'Banyumas',
            'sim' => '033123421424',
            'jenis_kelamin' => 'laki-laki',
            'kebangsaan' => 'wni',
            'status_pernikahan' => 'belum menikah',
            'linkedin' => 'linkedin/deva',
            'website' => 'deva.com',
            'deskripsi' => 'saya adalah seorang mahasiswa yang bercita-cita menjadi hokage'
        ]);

        Cv::create([
            'template_id' => 2,
            'user_id' => 2,
            'nama_depan' => 'Depol',
            'nama_belakang' => 'Apriana',
            'email' => 'depol@gmail.com',
            'nomor_telp' => '086262517265',
            'alamat' => 'Purwokerto, Jl.Kenanga no 27',
            'kota' => 'Purwokerto',
            'kode_pos' => '53122',
            'tanggal_lahir' => '2002-04-27',
            'tempat_lahir' => 'Banyumas',
            'sim' => '033123421424',
            'jenis_kelamin' => 'laki-laki',
            'kebangsaan' => 'wni',
            'status_pernikahan' => 'belum menikah',
            'linkedin' => 'linkedin/depol',
            'website' => 'depol.com',
            'deskripsi' => 'saya adalah seorang mahasiswa yang bercita-cita menjadi raja bajak laut'
        ]);

        Pendidikan::create([
            'cv_id' => 1,
            'gelar' => 'S.Kom.',
            'kota' => 'Purwokerto',
            'sekolah' => 'SMKN 1 Purwokerto',
            'tanggal_mulai' => '2017-01-01',
            'tanggal_selesai' => '2020-01-02',
            'deskripsi' => 'saya seorang siswa nolep'
        ]);

        Pendidikan::create([
            'cv_id' => 1,
            'gelar' => 'S.Kom.',
            'kota' => 'Purwokerto',
            'sekolah' => 'Telkom',
            'tanggal_mulai' => '2020-01-01',
            'tanggal_selesai' => '2024-01-02',
            'deskripsi' => 'saya seorang mahasiswa kupu-kupu'
        ]);

        Hobi::create([
            'cv_id' => 1,
            'hobi' => 'memancing'
        ]);

        Hobi::create([
            'cv_id' => 1,
            'hobi' => 'camping'
        ]);

        Keahlian::create([
            'cv_id' => 1,
            'keahlian' => 'laravel',
            'level' => 'expert',
            'lama' => 5
        ]);

        Keahlian::create([
            'cv_id' => 1,
            'keahlian' => 'html',
            'level' => 'expert',
            'lama' => 5
        ]);

        Keahlian::create([
            'cv_id' => 1,
            'keahlian' => 'css',
            'level' => 'expert',
            'lama' => 5
        ]);
    }
}
