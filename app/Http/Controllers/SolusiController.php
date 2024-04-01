<?php

namespace App\Http\Controllers;

use App\Models\PenyakitSolusi;
use PHPUnit\Util\Type;
use App\Models\Solusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SolusiController extends Controller
{
    public function index(Type $var = null)
    {
        $solusi = Solusi::get();

        // session()->forget('errMessage');
        return view('solusi', ['solusi' => $solusi]);
    }

    public function create()
    {
        return view('add.solusi-add');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $rules = [];
        $messages = [];

        $rules['solusi'] = 'unique:solusi|max:1000|required';
        $messages['solusi.unique'] = 'Solusi sudah ada!';
        $messages['solusi.max'] = 'Solusi tidak boleh lebih dari :max karakter!';
        $messages['solusi.required'] = 'Solusi wajib diisi!';

        $request->validate($rules, $messages);

        $arrayAdd = [];
        $arrayAdd = $request;

        $result = Solusi::create($arrayAdd->all());

        if ($result) {
            Session::flash('succMessage', 'Solusi berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Solusi gagal ditambahkan!');
        }

        return redirect('/solusi');
    }

    public function edit($id)
    {
        $solusi = Solusi::findOrFail($id);

        return view('edit.solusi-edit', ['solusi' => $solusi]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $solusi = Solusi::findOrFail($id);

        if ($request->solusi != $solusi->solusi) {

            $rules['solusi'] = 'unique:solusi|max:1000|required';
            $messages['solusi.unique'] = 'Solusi sudah ada!';
            $messages['solusi.max'] = 'Solusi tidak boleh lebih dari :max karakter!';
            $messages['solusi.required'] = 'Solusi wajib diisi!';
        }

        $request->validate($rules, $messages);
        $arrayUp = [];
        $arrayUp = $request;

        $result = $solusi->update($arrayUp->all());

        if ($result) {
            Session::flash('succMessage', 'Solusi berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Solusi gagal diubah!');
        }

        return redirect('/solusi');
    }

    public function destroy($id)
    {
        $solusi = Solusi::findOrFail($id);
        $result = $solusi->delete();

        if ($result) {
            Session::flash('succMessage', 'Solusi berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Solusi gagal dihapus!');
        }

        return redirect('/solusi');
    }

    public function request()
    {
        $solusi = ['solusi' => Solusi::with(['penyakit_solusi'])->get(), 'penyakit_solusi' => PenyakitSolusi::with(['penyakit'])->get()];

        return response()->json([$solusi]);
    }
}