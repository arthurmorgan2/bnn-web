<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $table = 'video';

    protected $guarded = ['id'];

    protected $hidden = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
