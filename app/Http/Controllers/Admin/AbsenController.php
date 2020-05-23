<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Absen;

class AbsenController extends Controller
{
    public function index() {
        $students = Student::latest()->paginate(10);
        return view('admin.absen.index', compact('students'));
    }

    public function store(Request $request) {
       $hadir = request('hadir');
    //    dd($hadir);
       $sakit = request('sakit');
       $izin = request('izin');
       $alfa = request('alfa');

       if ($hadir == null) {
           session()->flash('tidakHadir', 'Yahhh Hari Ini Tidak Ada Yang Hadir');
       }
       else {
           foreach ($hadir as $hdr) {
               $count = Absen::get()->where('name', $hdr)->where('tgl_absen', date('d F Y'));
               if (count($count) > 0) {
                   session()->flash('sudahAda', 'Absen Hari Ini Untuk Murid Ini Telah Dilakukan');
               }
    
               else {
                Absen::create([
                    "name" => $hdr,
                    "keterangan" => "Hadir",
                    "tgl_absen" => date('d F Y'),
                ]);
               }
            }
        }
        
        if ($sakit == null) {
            session()->flash('tidakSakit', 'Yeay Hari Ini Tidak Ada Yang Sakit');
        }
        else {
            foreach ($sakit as $skt) {
                $count = Absen::get()->where('name', $skt)->where('tgl_absen', date('d F Y'));
                    if (count($count) > 0) {
                        session()->flash('sudahAda', 'Absen Hari Ini Untuk Murid Ini Telah Dilakukan');
                    }
                    else {
                        Absen::create([
                        "name" => $skt,
                        "keterangan" => "Sakit",
                            "tgl_absen" => date('d F Y'),
                        ]);
                    }
                }
            }
           
        if($izin == null) {
            session()->flash('tidakIzin', 'Yeay Hari Ini Tidak Ada Yang Izin');
             }
        
        else {
            foreach ($izin as $izn) {
                $count = Absen::get()->where('name', $izn)->where('tgl_absen', date('d F Y'));
                if (count($count) > 0) {
                    session()->flash('sudahAda', 'Absen Hari Ini Untuk Murid Ini Telah Dilakukan');
                }
                else {
                    Absen::create([
                        "name" => $izn,
                        "keterangan" => "Izin",
                        "tgl_absen" => date('d F Y'),
                    ]);
                }
            }
        }
        
        if($alfa == null) {
            session()->flash('tidakAlfa', 'Yeay Hari Ini Tidak Ada Yang Alfa');
        }
        else {
            foreach ($alfa as $alf) {
                $count = Absen::get()->where('name', $alf)->where('tgl_absen', date('d F Y'));
                    if (count($count) > 0) {
                        session()->flash('sudahAda', 'Absen Hari Ini Untuk Murid Ini Telah Dilakukan');
                    }
                    else {
                        Absen::create([
                            "name" => $alf,
                            "keterangan" => "Alfa",
                            "tgl_absen" => date('d F Y'),
                    ]);
                }
            }
        }
        return redirect()->route('admin.absen.index');
    }
    
    public function report() {
            $students = Absen::get()->where('tgl_absen',date('d F Y'));
            $absens = Absen::where('tgl_absen', date('d F Y'))->paginate(10);
            return view('admin.absen.report', compact('absens'));
    }

    public function detailAbsen() {
        $details = Absen::latest()->paginate(10);
        return view('admin.absen.detailReport',compact('details'));
    }
}


