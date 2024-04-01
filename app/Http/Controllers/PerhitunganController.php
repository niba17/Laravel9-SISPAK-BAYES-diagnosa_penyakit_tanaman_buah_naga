<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Gejala;
use App\Models\Perhitungan;
use App\Models\saveEvidence;
use App\Models\saveHipotesa;
use App\Models\saveSolusi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PerhitunganController extends Controller
{
    protected $perhitungan;
    public function __construct()
    {
        $this->perhitungan = new Perhitungan();
    }

    public function index(Request $request)
    {
        // dd($request->all());
        $date = Carbon::now()->toDateTimeString();
        $gejala = Gejala::get();
        $arrEvidence = [];
        $i = 0;
        $arrReq = $request->except('_token');

        $valid = false;
        foreach ($arrReq as $key => $value) {
            foreach ($value as $key2 => $value2) {
                if (isset($value2) && $value2 == 1) {
                    $valid = true;
                }
            }
        }

        // dd($valid);

        if ($valid == false) {
            Session::flash('warnMessage', 'Pilih minimal 1 gejala!');
            return redirect('/home');
        } else {
            $bayes = $this->perhitungan->bayes($request->all());
            foreach ($arrReq as $key => $value) {
                foreach ($value as $key2 => $value2) {
                    foreach ($gejala as $key3 => $value3) {
                        if ($value2 == 1) {
                            if ($key2 == $value3->kode) {
                                $arrEvidence[$i] = ['kode' => $value3->kode, 'nama' => $value3->nama];
                                $i++;
                            }
                        }
                    }
                }
            }
            // dd($bayes);
            return view('perhitungan.perhitungan-hasil', ['bayes' => $bayes, 'date' => $date, 'evidence' => $request->except('_token'), 'arrEvidence' => $arrEvidence]);
        }
    }

    public function save(Request $request)
    {

        // dd($request->all());

        $arrCreate = $request->all();

        foreach ($arrCreate['evidence'] as $keyEvidence => $valueEvidence) {
            $resultEvidence = saveEvidence::create(['user_id' => $arrCreate['user_id'], 'user_name' => $arrCreate['user_name'], 'save_date_time' => $arrCreate['save_date_time'], 'kode' => $valueEvidence['kode'], 'nama' => $valueEvidence['nama']]);
        }

        foreach ($arrCreate['hipotesa'] as $valueHipotesa) {
            $resultHipotesa = saveHipotesa::create(['user_id' => $arrCreate['user_id'], 'user_name' => $arrCreate['user_name'], 'probabilitas' => $valueHipotesa['probabilitas'], 'persentase_probabilitas' => $valueHipotesa['persentase_probabilitas'], 'save_date_time' => $arrCreate['save_date_time'], 'kode' => $valueHipotesa['kode'], 'nama' => $valueHipotesa['nama']]);
        }

        foreach ($arrCreate['hipotesa'] as $valueHipotesa) {

            if (isset($valueHipotesa['solusi']) && count($valueHipotesa['solusi']) > 0) {

                foreach ($valueHipotesa['solusi'] as $valueSolusi) {
                    $resultSolusi = saveSolusi::create(['user_id' => $arrCreate['user_id'], 'user_name' => $arrCreate['user_name'], 'penyakit_kode' => $valueHipotesa['kode'], 'solusi' => $valueSolusi, 'save_date_time' => $arrCreate['save_date_time']]);
                }

            }

        }

        if ($resultEvidence && $resultHipotesa && $resultSolusi) {
            Session::flash('succMessage', 'Data diagnosa berhasil ditambahkan!');
        } else {
            Session::flash('errMessage', 'Data diagnosa gagal ditambahkan!');
        }

        return redirect('/home');
    }
}