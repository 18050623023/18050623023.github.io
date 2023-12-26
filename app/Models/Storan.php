<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
// use Illuminate\Database\Eloquent\Relations\HasMany;
// use Illuminate\Database\Eloquent\Relations\hasOneThrough;

class Storan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nasabah_id',
        'kategori_id',
        'lokasi_id',
        'tgl_menabung',
        'harga_pergram',
        'jml_tab_pergram',
        'total_tabungan',
        'status'
    ];

    public function Nasabah(): BelongsTo
    {
        return $this->belongsTo(Nasabah::class,'nasabah_id','user_id');
    }

    public function DataBank(): BelongsTo
    {
        return $this->belongsTo(DataBank::class, 'lokasi_id');
    }

    public function Tabungan(): HasOne
    {
        return $this->HasOne(Tabungan::class, 'storan_id');
    }
    // public function Tabungan(): hasOneThrough
    // {
    //     return $this->hasOneThrough(
    //         Tabungan::class,
    //         Databank::class,
    //         'user_id', # foreign key on intermediary -- categories
    //         'nasabah_id', # foreign key on target -- projects
    //         'nasabah_id', # local key on this -- properties
    //         'user_id' # local key on intermediary -- categories
    //     );
    // }

    // public function nasabah(): HasMany
    // {
    //     return $this->hasMany(Nasabah::class, 'id', 'nasabah_id');
    // }
}
