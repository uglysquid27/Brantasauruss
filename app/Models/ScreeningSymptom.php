<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScreeningSymptom extends Model
{
    use HasFactory;

    protected $fillable = [
        'screening_id', 'batuk', 'bb', 'demam', 'lemas', 'keringat', 'sesak', 'getah', 'jangkit', 'lainnya'
    ];

    public function screening()
    {
        return $this->belongsTo(Screening::class);
    }
}
