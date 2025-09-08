<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = 'tb_buku';
    protected $guarded = ['id'];

    public $timestamps = false;
}
