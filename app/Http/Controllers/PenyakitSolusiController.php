<?php

namespace App\Http\Controllers;

use App\Models\PenyakitSolusi;
use App\Models\Solusi;
use App\Models\Gejala;
use PHPUnit\Util\Type;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenyakitSolusiController extends Controller
{
    public function index(Type $var = null)
    {
        $penyakit = Penyakit::with(['penyakit_solusi.solusi'])->get();

        return view('relasi.relasi-penyakit_solusi', ['penyakit' => $penyakit]);
    }

    public function create()
    {
        $solusi = Solusi::get();
        $penyakit = Penyakit::get();

        return view('add.penyakit_solusi-add', ['solusi' => $solusi, 'penyakit' => $penyakit]);
    }

    public function store(Request $request)
    {
        $rules = [];
        $messages = [];

        $rules['solusi_id'] = 'required';
        $messages['solusi_id.required'] = 'Gejala wajib diisi!';

        $rules['penyakit_id'] = 'required';
        $messages['penyakit_id.required'] = 'Penyakit wajib diisi!';

        $request->validate($rules, $messages);

        $arrayAdd = [];
        $arrayAdd = $request;

        $result = PenyakitSolusi::create($arrayAdd->all());

        if ($result) {
            Session::flash('succMessage', 'Relasi berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Relasi gagal ditambahkan!');
        }

        return redirect('/penyakit_solusi');
    }

    public function edit($id)
    {
        $penyakit_solusi = PenyakitSolusi::with(['penyakit', 'solusi'])->findOrFail($id);
        $solusi = Solusi::with(['penyakit_solusi'])->get();
        $penyakit = Penyakit::with(['penyakit_solusi'])->get();

        return view('edit.penyakit_solusi-edit', ['penyakit_solusi' => $penyakit_solusi, 'solusi' => $solusi, 'penyakit' => $penyakit]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $rules = [];
        $messages = [];

        $relasi = PenyakitSolusi::findOrFail($id);

        if ($request->gejala_id != $relasi->gejala_id) {
            $rules['gejala_id'] = 'required';
            $messages['gejala_id.required'] = 'Gejala wajib diisi!';
        }

        if ($request->penyakit_id != $relasi->penyakit_id) {
            $rules['penyakit_id'] = 'required';
            $messages['penyakit_id.required'] = 'Penyakit wajib diisi!';
        }

        if ($request->bobot != $relasi->bobot) {
            $rules['bobot'] = 'lte:1|gte:0.1|required';
            $messages['bobot.lte'] = 'Bobot tidak boleh lebih dari 1!';
            $messages['bobot.gte'] = 'Bobot tidak boleh kurang dari 0.1!';
            $messages['bobot.required'] = 'Bobot wajib diisi!';
        }

        $request->validate($rules, $messages);
        $arrayUp = [];
        $arrayUp = $request;

        $result = $relasi->update($arrayUp->all());

        if ($result) {
            Session::flash('succMessage', 'Relasi berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Relasi gagal diubah!');
        }

        return redirect('/penyakit_solusi');
    }

    public function destroy($id)
    {
        $relasi = PenyakitSolusi::findOrFail($id);
        $result = $relasi->delete();

        if ($result) {
            Session::flash('succMessage', 'Relasi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Relasi gagal dihapus!');
        }

        return redirect('/penyakit_solusi');
    }

    public function request()
    {
        $penyakit_solusi = ['penyakit_solusi' => PenyakitSolusi::with(['penyakit', 'solusi'])->get(), 'solusi' => Solusi::with(['penyakit_solusi'])->get()];
        return response()->json([$penyakit_solusi]);
    }
}