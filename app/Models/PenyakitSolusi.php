<?php

namespace App\Models;

use App\Models\Penyakit;
use App\Models\Solusi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyakitSolusi extends Model
{
    use HasFactory;
    protected $table = 'penyakit_solusi';
    protected $guarded = ['id'];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
    public function solusi()
    {
        return $this->belongsTo(Solusi::class);
    }
}