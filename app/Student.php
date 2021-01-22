<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // protected $table = 'mahasiswa';
    // protected $primaryKey = 'id_mahasiswa';
    use SoftDeletes;
    protected $fillable = ['nama', 'nrp', 'email', 'jurusan'];
}
