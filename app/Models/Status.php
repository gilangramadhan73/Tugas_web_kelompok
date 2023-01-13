<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['id', 'nm_peserta', 'alamat', 'no_tlp', 'status'];
    use HasFactory;
}
