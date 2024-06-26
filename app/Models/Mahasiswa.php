<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'mahasiswa';

    public function getRouteKeyName()
    {
        return 'NIM';
    }
}
