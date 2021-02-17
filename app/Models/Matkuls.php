<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matkuls extends Model
{
    use HasFactory;

    protected $guarded = ['nama_matkul'];

    public function kotas()
    {
        return $this->belongsTo('App\Models\Absens');
    }
}
