<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    public $timestamps      = true;
    protected $table        = "anggota";
    protected $filleable    = ['nama','hp'];
    protected $guarded      = "id";
}
