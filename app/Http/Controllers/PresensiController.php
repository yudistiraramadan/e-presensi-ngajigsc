<?php

namespace App\Http\Controllers;

use DateTime;
use DateTimeZone;
use App\Models\Presensi;
use Illuminate\Http\Request;

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
            dd('sudah absen masuk bre');
        }else{
            Presensi::create([
                'user_id' => auth()->user()->id,
                'tanggal' => $tanggal,
                'jammasuk' => $localtime,
            ]);
        }
        return redirect('presensi-masuk');
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
            return redirect('presensi-keluar');
        }else{
            dd("sudah absen keluar bree");
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
