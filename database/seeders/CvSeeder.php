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
            'image' => '/upload/template/template1.png',
            'type' => 'gratis',
            'harga' => 0,
            'col_website' => false,
            'col_linkedin' => false,
            'col_kota' => false,
            'col_kodepos' => false,
            'col_tanggal_lahir' => false,
            'col_tempat_lahir' => false,
            'col_sim' => false,
            'col_jenis_kelamin' => false,
            'col_kebangsaan' => false,
            'col_status_pernikahan' => false,
        ]);

        Template::create([
            'nama' => 'colorfull',
            'image' => '/upload/template/template2.png',
            'type' => 'gratis',
            'harga' => 15000,
            'col_website' => false,
            'col_linkedin' => false,
            'col_kota' => false,
            'col_kodepos' => false,
            'col_tanggal_lahir' => false,
            'col_tempat_lahir' => false,
            'col_sim' => false,
            'col_jenis_kelamin' => false,
            'col_kebangsaan' => false,
            'col_status_pernikahan' => false,
        ]);

        Cv::create([
            'template_id' => 1,
            'user_id' => 2,
            'nama' => 'Deva Apriana',
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
            'nama' => 'Depol Apriana',
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
            'tahun_mulai' => '2017',
            'tahun_selesai' => '2020',
            'deskripsi' => 'saya seorang siswa nolep'
        ]);

        Pendidikan::create([
            'cv_id' => 1,
            'gelar' => 'S.Kom.',
            'kota' => 'Purwokerto',
            'sekolah' => 'Telkom',
            'tahun_mulai' => '2020',
            'tahun_selesai' => '2024',
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
