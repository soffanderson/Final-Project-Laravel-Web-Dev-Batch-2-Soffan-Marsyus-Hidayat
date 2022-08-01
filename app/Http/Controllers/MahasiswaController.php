<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function formCreate()   
    {
        return view('form-create');
    }

    public function saveData(Request $request) {
        $mahasiswa = new Mahasiswa;
        $mahasiswa->name =$request->name;
        $mahasiswa->nik = $request->nik;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->tahun_masuk = $request->tahun_masuk;
        $mahasiswa->tahun_lulus = $request->tahun_lulus;
        $mahasiswa->image = $request->image;
        $mahasiswa->save();

        return redirect('/');
    }

    public function deleteData($id) {
        $mahasiswa = Mahasiswa::find($id)->delete();
        return redirect('/');
    }

    public function formEdit($id) {
        $mahasiswa = Mahasiswa::find($id);
        return view('form-edit', compact('mahasiswa'));
    }
    public function editData(Request $request, $id) {
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->name =$request->name;
        $mahasiswa->nik = $request->nik;
        $mahasiswa->jurusan = $request->jurusan;
        $mahasiswa->fakultas = $request->fakultas;
        $mahasiswa->tahun_masuk = $request->tahun_masuk;
        $mahasiswa->tahun_lulus = $request->tahun_lulus;
        $mahasiswa->image = $request->image;
        $mahasiswa->save();

        return redirect('/');
    }
}
