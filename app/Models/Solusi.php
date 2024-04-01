<?php

namespace App\Models;

use App\Models\PenyakitSolusi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    use HasFactory;

    protected $table = 'solusi';
    protected $guarded = ['id'];

    public function penyakit_solusi()
    {
        return $this->hasMany(PenyakitSolusi::class, 'solusi_id', 'id');
    }
}