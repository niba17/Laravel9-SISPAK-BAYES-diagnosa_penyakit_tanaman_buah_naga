<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pakar;
use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Solusi;
use PHPUnit\Util\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class PakarController extends Controller
{
    public function index(Type $var = null)
    {
        $pakar = Pakar::get();
        $gejala = Gejala::get();
        $penyakit = Penyakit::get();
        $solusi = Solusi::get();

        // session()->forget('errMessage');
        return view('pakar', ['pakar' => $pakar, 'gejala' => $gejala, 'penyakit' => $penyakit, 'solusi' => $solusi]);
    }

    public function create()
    {
        return view('add.pakar-add');
    }

    public function store(Request $request)
    {

      

        $rules = [];
        $messages = [];

        $rules['nama'] = 'unique:pakar|max:100|required';
        $messages['nama.unique'] = 'Nama sudah ada!';
        $messages['nama.max'] = 'Nama tidak boleh lebih dari :max karakter!';
        $messages['nama.required'] = 'Nama wajib diisi!';

        $rules['jk'] = 'required';
        $messages['jk.required'] = 'Jenis kelamin wajib dipilih!';

        $rules['alamat'] = 'required';
        $messages['alamat.required'] = 'Alamat wajib diisi!';

        $rules['tmpt_lahir'] = 'required|max:100';
        $messages['tmpt_lahir.max'] = 'Tempat lahir tidak boleh lebih dari :max karakter!';
        $messages['tmpt_lahir.required'] = 'Tempat lahir wajib diisi!';

        $rules['tgl_lahir'] = 'required|max:100';
        $messages['tgl_lahir.max'] = 'Tanggal lahir lahir tidak boleh lebih dari :max karakter!';
        $messages['tgl_lahir.required'] = 'Tanggal lahir wajib diisi!';

        $rules['no_tlp'] = 'max:100';
        $messages['no_tlp.max'] = 'No Telepon tidak boleh lebih dari :max karakter!';

        $rules['foto'] = 'mimes:jpg,jpeg|image|max:2048';
        $messages['foto.mimes'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg, pdf';
        $messages['foto.image'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg, pdf';
        $messages['foto.max'] = 'File tidak boleh lebih dari :max kb!';

        $newName = '';
        $extension = $request->file('foto')->getClientOriginalExtension();
        $newName = Auth::user()->nama . '_foto_' . now()->timestamp . '.' . $extension;
        $request->file('foto')->storeAs('images', $newName);

        $arrayAdd = [];
        $arrayAdd = $request->all();

        $arrayAdd['foto'] = $newName;

        $request->validate($rules, $messages);


        $result = Pakar::create($arrayAdd);

        if ($result) {
            Session::flash('succMessage', 'Pakar berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Pakar gagal ditambahkan!');
        }

        return redirect('/pakar');
    }

    public function edit($id)
    {
        $pakar = Pakar::findOrFail($id);

        return view('edit.pakar-edit', ['pakar' => $pakar]);
    }

    public function update(Request $request, $id)
    {
        $rules = [];
        $messages = [];

        $pakar = Pakar::findOrFail($id);

        if ($request->nama != $pakar->nama) {
            $rules['nama'] = 'unique:pakar|max:100|required';
            $messages['nama.unique'] = 'Nama sudah ada!';
            $messages['nama.max'] = 'Nama tidak boleh lebih dari :max karakter!';
            $messages['nama.required'] = 'Nama wajib diisi!';
        }

        if ($request->jk != $pakar->jk) {
            $rules['jk'] = 'required';
            $messages['jk.required'] = 'Jenis kelamin wajib dipilih!';
        }

        if ($request->alamat != $pakar->alamat) {
            $rules['alamat'] = 'required';
            $messages['alamat.required'] = 'Alamat wajib diisi!';
        }

        if ($request->tmpt_lahir != $pakar->tmpt_lahir) {
            $rules['tmpt_lahir'] = 'required|max:100';
            $messages['tmpt_lahir.max'] = 'Tempat lahir tidak boleh lebih dari :max karakter!';
            $messages['tmpt_lahir.required'] = 'Tempat lahir wajib diisi!';
        }

        if ($request->tgl_lahir != $pakar->tgl_lahir) {
            $rules['tgl_lahir'] = 'required|max:100';
            $messages['tgl_lahir.max'] = 'Tanggal lahir tidak boleh lebih dari :max karakter!';
            $messages['tgl_lahir.required'] = 'Tanggal lahir wajib diisi!';
        }

        if ($request->tgl_lahir != $pakar->tgl_lahir) {
            $rules['no_tlp'] = 'max:100';
            $messages['no_tlp.max'] = 'No Telepon tidak boleh lebih dari :max karakter!';
        }

        $arrayUp = [];
        $arrayUp = $request->all();

        if ($request->foto != null) {

            $rules['foto'] = 'mimes:jpg,jpeg|image|max:2048';
            $messages['foto.mimes'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg, pdf';
            $messages['foto.image'] = 'Format file tidak sesuai, format yang diijinkan : jpg, jpeg, pdf';
            $messages['foto.max'] = 'File tidak boleh lebih dari :max kb!';
    
            $newName = '';
            $extension = $request->file('foto')->getClientOriginalExtension();
            $newName = Auth::user()->nama . '_foto_' . now()->timestamp . '.' . $extension;
            $request->file('foto')->storeAs('images', $newName);

            $arrayUp['foto']=$newName;
        }

        $request->validate($rules, $messages);

        $result = $pakar->update($arrayUp);

        if ($result) {
            Session::flash('succMessage', 'Pakar berhasil diubah!');
        } else {
            Session::flash('errMessage', 'Pakar gagal diubah!');
        }

        return redirect('/pakar');
    }

    public function destroy($id)
    {
        $pakar = Pakar::findOrFail($id);
        $result = $pakar->delete();

        if ($result) {
            Session::flash('succMessage', 'Pakar berhasil dihapus!');
        } else {
            Session::flash('errMessage', 'Pakar gagal dihapus!');
        }

        return redirect('/pakar');
    }

}