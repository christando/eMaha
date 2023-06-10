<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }

    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }

    public function student()
    {
        $mhs = Mahasiswa::paginate(5);
        // return dd($mhs);
        return view('student', ['key' => 'student', 'mhs' => $mhs]);
    }

    public function search(Request $request)
    {
        $cari = $request->q;
        $mhs = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->paginate(5);
        $mhs->appends($request->all());
        return view('student', ['key' => 'student', 'mhs'=> $mhs]);

    }

    public function formadd()
    {
        return view('formadd', ['key' => 'student']);
    }

    public function formedit($id)
    {
        $mhs =Mahasiswa::find($id);

        return view('formedit', ['key'=>'student','mhs' => $mhs]);
    }

    public function save(Request $request)
    {
        $minat = implode(',',$request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' =>$minat
        ]);
        return redirect('student')->with('flash', 'Data Berhasil di Simpan');
    }

    public function update($id,Request $request)
    {
        $minat = implode(',',$request->get('minat'));
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs -> save();

        return redirect('student')->with('flash', 'Data Berhasil di Update');
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('student')->with('flash', 'Data Berhasil di Hapus');
    }

    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }


}
