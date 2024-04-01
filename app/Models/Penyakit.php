<?php

namespace App\Models;

use App\Models\GejalaPenyakit;
use App\Models\PenyakitSolusi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = 'penyakit';
    protected $guarded = ['id'];

    public function gejala_penyakit()
    {
        return $this->hasMany(GejalaPenyakit::class, 'penyakit_id', 'id');
    }

    public function penyakit_solusi()
    {
        return $this->hasMany(PenyakitSolusi::class, 'penyakit_id', 'id');
    }
}