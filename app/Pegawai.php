<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'jabatan_id', 'alamat', 'tgllhr', 'agama_id', 'gaji_pokok_id'
    ];

    public function jabatan() {
        return $this->belongsTo(Jabatan::class);
    }

    public function gaji_pokok() {
        return $this->belongsTo(GajiPokok::class);
    }

    public function agama() {
        return $this->belongsTo(Agama::class);
    }
}
