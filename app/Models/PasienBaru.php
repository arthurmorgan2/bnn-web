<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienBaru extends Model
{
    use HasFactory;

    protected $table = 'pasien_baru';

    protected $guarded = [];

    protected $hidden = [];
}
