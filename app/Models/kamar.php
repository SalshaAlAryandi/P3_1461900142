<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';
    protected $primaryKey = 'kamar_id';
    // protected $keytype = 'string';
    protected $fillable = [
        'id',
        'id_pasien',
        'id_dokter',
    ];

    public function id_pasien(){
        return $this->belongsTo(Pasien::class, 'id_pasien','id');
    }
    public function id_dokter(){
        return $this->belongsTo(Pasien::class, 'id_dokter','id');
}
}