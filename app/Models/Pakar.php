<?php

namespace App\Models;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pakar extends Model
{
    use HasFactory;
    protected $table = 'pakar';
    protected $guarded = ['id'];

    public function kecamatan()
    {
        return $this->belongsTo(Kecamatan::class);
    }

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class);
    }
}