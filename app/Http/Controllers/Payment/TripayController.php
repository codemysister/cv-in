<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Keahlian;
use App\Models\Organisasi;
use App\Models\Pendidikan;
use App\Models\Pengalaman;
use App\Models\Template;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TripayController extends Controller
{
    public function getPaymentChannels()
    {

        $apiKey = config('tripay.api_key');

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/merchant/payment-channel',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response)->data;



        return $response ? $response : $error;
    }

    public function requestTransaction(Request $request)
    {

        $cv = Cv::find(Session::get('template_id'));


        $pendidikan = $cv->pendidikans()->get();
        $pengalaman = $cv->pengalamans()->get();
        $organisasi = $cv->organisasis()->get();
        $keahlian = $cv->keahlians()->get();

        $user = Auth::user();
        $apiKey       = config('tripay.api_key');
        $privateKey   = config('tripay.private_key');
        $merchantCode = config('tripay.merchant_code');
        $merchantRef  = 'PX-' . time();
        $amount       = Template::find(Session::get('template_id'))->harga;

        $data = [
            'method'         => $request->channel,
            'merchant_ref'   => $merchantRef,
            'amount'         => $amount,
            'customer_name'  => $user->name,
            'customer_email' => $user->email,
            'customer_phone' => $cv->nomor_telp,
            'order_items'    => [
                [
                    'sku'         => 'FB-06',
                    'name'        => 'Nama Produk 1',
                    'price'       => $amount,
                    'quantity'    => 1,
                ]
            ],

            'expired_time' => (time() + (24 * 60 * 60)), // 24 jam
            'signature'    => hash_hmac('sha256', $merchantCode . $merchantRef . $amount, $privateKey)
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/create',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_POST           => true,
            CURLOPT_POSTFIELDS     => http_build_query($data),
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response)->data;
        // return $response ? $response : $error;

        $payload = ['reference'    => $response->reference];



        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_FRESH_CONNECT  => true,
            CURLOPT_URL            => 'https://tripay.co.id/api-sandbox/transaction/detail?' . http_build_query($payload),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER         => false,
            CURLOPT_HTTPHEADER     => ['Authorization: Bearer ' . $apiKey],
            CURLOPT_FAILONERROR    => false,
            CURLOPT_IPRESOLVE      => CURL_IPRESOLVE_V4
        ]);

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        $response = json_decode($response)->data;

        Transaction::create([
            'user_id' => $user->id,
            'template_id' => Session::get('template_id'),
            'reference' => $response->reference,
            'merchant_ref' => $merchantRef,
            'total' => $amount,
            'status' => $response->status
        ]);


        if (!empty($cv)) {
            Cv::where('id', Session::get('template_id'))->update([
                'template_id' => Session::get('template_id'),
                'user_id' => $user->id,
                'nama' => $request->nama,
                'email' => $request->email,
                'nomor_telp' => $request->nomor_telp,
                'alamat' => $request->alamat,
                'kota' => $request->kota ?: null,
                'kode_pos' => $request->kode_pos ?: null,
                'tanggal_lahir' => $request->tanggal_lahir ?: null,
                'tempat_lahir' => $request->tempat_lahir ?: null,
                'sim' => $request->sim ?: null,
                'jenis_kelamin' => $request->jenis_kelamin ?: null,
                'kebangsaan' => $request->kebangsaan ?: null,
                'status_pernikahan' => $request->status_pernikahan ?: null,
                'linkedin' => $request->linkedin ?: null,
                'website' => $request->website ?: null,
                'deskripsi' => $request->deskripsi ?: null,
            ]);
        } else {
            Cv::create([
                'template_id' => Session::get('template_id'),
                'user_id' => $user->id,
                'nama' => $request->nama,
                'email' => $request->email,
                'nomor_telp' => $request->nomor_telp,
                'alamat' => $request->alamat,
                'kota' => $request->kota ?: null,
                'kode_pos' => $request->kode_pos ?: null,
                'tanggal_lahir' => $request->tanggal_lahir ?: null,
                'tempat_lahir' => $request->tempat_lahir ?: null,
                'sim' => $request->sim ?: null,
                'jenis_kelamin' => $request->jenis_kelamin ?: null,
                'kebangsaan' => $request->kebangsaan ?: null,
                'status_pernikahan' => $request->status_pernikahan ?: null,
                'linkedin' => $request->linkedin ?: null,
                'website' => $request->website ?: null,
                'deskripsi' => $request->deskripsi ?: null,
            ]);
        }

        foreach ($pendidikan as $p) {
            Pendidikan::where("id", $p->id)->delete();
        }

        foreach ($request->pendidikan as $p) {
            Pendidikan::create([
                'cv_id' => Session::get('template_id'),
                'gelar' => null,
                'kota' => null,
                'sekolah' => $p["sekolah"],
                'tahun_mulai' => $p["tahun_masuk"],
                'tahun_selesai' => $p["tahun_lulus"],
            ]);
        }

        foreach ($pengalaman as $p) {
            Pengalaman::where("id", $p->id)->delete();
        }

        foreach ($request->pengalaman as $p) {
            Pengalaman::create([
                'cv_id' => Session::get('template_id'),
                'jenis' => null,
                'nama' => $p["pengalaman"],
                'deskripsi' => $p["deskripsi"],
                'tanggal_mulai' => $p["tahun_masuk"],
                'tanggal_selesai' => $p["tahun_selesai"]
            ]);
        }

        foreach ($keahlian as $p) {
            Keahlian::where("id", $p->id)->delete();
        }

        foreach ($request->nama_keahlian as $p) {
            Keahlian::create([
                'cv_id' => Session::get('template_id'),
                'keahlian' => $p
            ]);
        }

        foreach ($organisasi as $p) {
            Organisasi::where("id", $p->id)->delete();
        }

        foreach ($request->organisasi as $p) {
            Organisasi::create([
                'cv_id' => Session::get('template_id'),
                'nama_organisasi' => $p["nama_organisasi"],
                'tahun_mulai_organisasi' => $p["tahun_masuk"],
                'tahun_selesai_organisasi' => $p["tahun_selesai"],
            ]);
        }


        return $response ? $response : $error;
    }
}
