<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Model_Data extends Model
{
    use softDeletes;

    protected $table = "penugasan";
    protected $fillable = [
        'nama',
        'no_tlp',
        'alamat'
    ];

    protected  $hidden;
}
