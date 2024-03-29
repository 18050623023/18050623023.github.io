<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Databank extends Model
{
    use HasFactory;

    protected $fillable = [
        'teller_id',
        'nama_bank',
        'alamat',
        'harga',
        'tgl_bergabung',
        'lat',
        'long',
        'path'
    ];
}
