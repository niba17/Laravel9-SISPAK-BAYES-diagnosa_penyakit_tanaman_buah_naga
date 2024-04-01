<?php

namespace App\Models;

use App\Models\GejalaPenyakit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gejala extends Model
{
    use HasFactory;

    protected $table = 'gejala';
    protected $guarded = ['id'];

    public function gejala_penyakit()
    {
        return $this->hasMany(GejalaPenyakit::class, 'gejala_id', 'id');
    }
}