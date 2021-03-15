<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'tmhs';
    protected $fillable = ['nim','nama','alamat','prodi'];
}
