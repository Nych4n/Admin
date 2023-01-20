<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $table = 'nilai';
    protected $primaryKey = 'id';

    protected $fillable = [
        'siswa_id','pwpb','basda'
    ];

    public function Siswa()
    {
        return $this->belongsTo(Siswa::class);
    }
}
