<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\KecamatanKelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LokasiController extends Controller
{
    public function index()
    {
        $kecamatan = Kecamatan::with(['kecamatan_kelurahan.kelurahan'])->get();
        $kelurahan = Kelurahan::with(['kecamatan_kelurahan.kecamatan'])->get();
        $kecamatan_kelurahan=KecamatanKelurahan::with(['kecamatan','kelurahan'])->get();
// dd($kecamatan);
        return view('lokasi', ['kecamatan' => $kecamatan,'kelurahan' => $kelurahan,'kecamatan_kelurahan' => $kecamatan_kelurahan]);
    }

    public function create()
    {
        $kecamatan = Kecamatan::with(['kecamatan_kelurahan.kelurahan'])->get();
        $kelurahan = Kelurahan::with(['kecamatan_kelurahan.kecamatan'])->get();

        return view('add.lokasi-add', ['kecamatan' => $kecamatan,'kelurahan' => $kelurahan]);
    }

    public function store(Request $request)
    {
        $rules = [];
        $messages = [];

        $rules['kecamatan_id'] = 'required';
        $messages['kecamatan_id.required'] = 'Kecamatan wajib dipilih!';

        $rules['kelurahan_id'] = 'required';
        $messages['kelurahan_id.required'] = 'Kelurahan wajib dipilih!';

        $request->validate($rules, $messages);

        $result = KecamatanKelurahan::create($request->all());

        if ($result) {
            Session::flash('succMessage', 'Kelurahan dalam Kecamatan berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Kelurahan dalam Kecamatan gagal ditambahkan!');
        }

        return redirect('/lokasi');
    }

    public function edit($id)
    {        
        $kecamatan_kelurahan = KecamatanKelurahan::findOrFail($id);        
        $kecamatan = Kecamatan::with(['kecamatan_kelurahan.kelurahan'])->get();        
        $kelurahan = Kelurahan::with(['kecamatan_kelurahan.kecamatan'])->get();        

        return view('edit.lokasi-edit', ['kecamatan_kelurahan' => $kecamatan_kelurahan,'kecamatan' => $kecamatan,'kelurahan' => $kelurahan]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $kecamatan_kelurahan = KecamatanKelurahan::findOrFail($id);

        if ($request->kelurahan_id !== $kecamatan_kelurahan->kelurahan_id) {
            $rules['kelurahan_id'] = 'required';
            $messages['kelurahan_id.required'] = 'Kelurahan wajib dipilih!';
        }

        if ($request->kecamatan_id !== $kecamatan_kelurahan->kecamatan_id) {
            $rules['kecamatan_id'] = 'required';
            $messages['kecamatan_id.required'] = 'Kecamatan wajib dipilih!';
        }

        $request->validate($rules, $messages);

        $result = $kecamatan_kelurahan->update($request->all());


        if ($result) {
            Session::flash('succMessage', 'Kelurahan dalam Kecamatan berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Kelurahan dalam Kecamatan gagal diubah!');
        }

        return redirect('/lokasi');
    }

    public function destroy($id)
    {
        $kecamatan_kelurahan = KecamatanKelurahan::findOrFail($id);
        $result = $kecamatan_kelurahan->delete();

        if ($result) {
            Session::flash('succMessage', 'Kelurahan berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Kelurahan gagal dihapus!');
        }

        return redirect('/lokasi');
    }

    public function request()
    {
        $kelurahan = Kelurahan::with(['kecamatan_kelurahan.kecamatan'])->get();
        return response()->json([$kelurahan]);
    }
}