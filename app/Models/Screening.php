<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    use HasFactory;

    protected $fillable = [
        'namaLengkap',
        'alamat',
        'phone',
        'nik',
        'work',
        'born',
        'gender',
    ];

    /**
     * Get the symptoms associated with the screening.
     */
    public function symptoms()
    {
        return $this->hasOne(ScreeningSymptom::class);
    }
}