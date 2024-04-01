<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class saveSolusi extends Model
{
    use HasFactory;
    protected $table = 'save_solusi';
    protected $guarded = ['id'];
}