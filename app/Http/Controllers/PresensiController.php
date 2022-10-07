<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function presensimasuk()
    {
        return view('presensi.masuk');
    }

    public function presensikeluar()
    {
        return view('presensi.keluar');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=',auth()->user()->id],
            ['tanggal', '=',$tanggal],
        ])->first();
        if ($presensi){
            return redirect('presensi-masuk')->with('info', 'Anda sudah absensi');
        }else{
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tanggal' => $tanggal,
                'jammasuk' => $localtime,
            ]);
        }
        return redirect('presensi-masuk')->with('success', 'Anda berhasil absensi');
    }

    public function storekeluar(Request $request)
    {
        $timezone = 'Asia/Jakarta';
        $date = new DateTime('now', new DateTimeZone($timezone));
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['user_id', '=',auth()->user()->id],
            ['tanggal', '=',$tanggal],
        ])->first();

        $dt=[
            'jamkeluar' => $localtime,
            'jamngaji' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jammasuk))
        ];

        if ($presensi->jamkeluar == "")
        {
            $presensi->update($dt);
            return redirect('presensi-keluar')->with('success', 'Anda berhasil absensi keluar');
        }else{
            return redirect('presensi-keluar')->with('info', 'Anda sudah absensi keluar');
        }
        
    }
    
    public function halamanrekap()
    {
        return view('presensi.halaman-rekap-santri');

    }

    public function tampildatakeseluruhan($tglawal, $tglakhir)
    {
        $presensi = Presensi::with('user')->whereBetween('tanggal', [$tglawal, $tglakhir])->orderBy('tanggal', 'asc')->get();
        return view('presensi.rekap-santri',compact('presensi'));
    }

    public function allpresensi()
    {
        // Short By Descending ver1
        // $data = DB::table('presensis')
        // ->orderBy('id', 'desc')
        // ->get();
        // return view('presensi.presensi-keseluruhan', compact('data'));

        // Short By Descending ver2 
        // $data = Presensi::all()
        // ->sortByDesc('id');
        // return view('presensi.presensi-keseluruhan', compact('data'));
        
        $data = Presensi::all()
        ->sortByDesc('id');
        return view('presensi.presensi-keseluruhan', compact('data'));

    }
}

