<?php

namespace App\Http\Controllers;

use App\Models\GejalaPenyakit;
use App\Models\Gejala;
use PHPUnit\Util\Type;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GejalaPenyakitController extends Controller
{
    public function index(Type $var = null)
    {
        $penyakit = Penyakit::with(['gejala_penyakit.gejala'])->get();

        return view('relasi.relasi-gejala_penyakit', ['penyakit' => $penyakit]);
    }

    public function create()
    {
        $gejala = Gejala::get();
        $penyakit = Penyakit::get();
        return view('add.gejala_penyakit-add', ['gejala' => $gejala, 'penyakit' => $penyakit]);
    }

    public function store(Request $request)
    {
        $rules = [];
        $messages = [];

        $rules['gejala_id'] = 'required';
        $messages['gejala_id.required'] = 'Gejala wajib diisi!';

        $rules['penyakit_id'] = 'required';
        $messages['penyakit_id.required'] = 'Penyakit wajib diisi!';

        $rules['bobot'] = 'lte:1|gte:0.1|required';
        $messages['bobot.lte'] = 'Bobot tidak boleh lebih dari 1!';
        $messages['bobot.gte'] = 'Bobot tidak boleh kurang dari 0.1!';
        $messages['bobot.required'] = 'Bobot wajib diisi!';

        $request->validate($rules, $messages);

        $arrayAdd = [];
        $arrayAdd = $request;

        $result = GejalaPenyakit::create($arrayAdd->all());

        if ($result) {
            Session::flash('succMessage', 'Data relasi berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Data relasi gagal ditambahkan!');
        }

        return redirect('/gejala_penyakit');
    }

    public function edit($id)
    {
        $gejala_penyakit = GejalaPenyakit::with(['gejala'])->findOrFail($id);
        $gejala = Gejala::with(['gejala_penyakit'])->get();
        $penyakit = Penyakit::with(['gejala_penyakit'])->get();
        return view('edit.gejala_penyakit-edit', ['gejala_penyakit' => $gejala_penyakit, 'gejala' => $gejala, 'penyakit' => $penyakit]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $rules = [];
        $messages = [];

        $relasi = GejalaPenyakit::findOrFail($id);

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
            Session::flash('succMessage', 'Data relasi berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Data relasi gagal diubah!');
        }

        return redirect('/gejala_penyakit');
    }

    public function destroy($id)
    {
        $relasi = GejalaPenyakit::findOrFail($id);
        $result = $relasi->delete();

        if ($result) {
            Session::flash('succMessage', 'Data relasi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Data relasi gagal dihapus!');
        }

        return redirect('/gejala_penyakit');
    }

    public function request()
    {
        $gejala_penyakit = ['gejala_penyakit' => GejalaPenyakit::with(['gejala', 'penyakit'])->get(), 'penyakit' => Penyakit::with(['gejala_penyakit'])->get()];
        return response()->json([$gejala_penyakit]);
    }
}