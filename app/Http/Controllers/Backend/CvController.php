<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Cv;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CvController extends Controller
{
    public function dashboard()
    {
        $jmlCv = Cv::count();
        return view('backend.cv.dashboard', ['jmlCv' => $jmlCv]);
    }


    public function index(Request $request)
    {

        if ($request->ajax()) {
            return DataTables::of(Cv::query())
                ->addColumn('action', function (Cv $cv) {
                    return '<a href=' . route('cv.detail', $cv->id) . '><i class="fa-solid fa-eye"></i></a>';
                })->toJson();
        }
        return view('backend.cv.index');
    }

    public function detail($id)
    {
        $cv = Cv::find($id);

        return view('backend.cv.detail', compact('cv'));
    }

    public function transaksi()
    {
        $transaksi = Transaction::all();
        return view('backend.cv.transaksi', compact('transaksi'));
    }
}
