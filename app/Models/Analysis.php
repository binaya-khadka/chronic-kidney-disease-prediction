<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analysis extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'age',
        'bp',
        'sg',
        'al',
        'su',
        'rbc',
        'pc',
        'pcc',
        'ba',
        'bgr',
        'bu',
        'sc',
        'sod',
        'pot',
        'hemo',
        'pcv',
        'wc',
        'rc',
        'htn',
        'dm',
        'cad',
        'appet',
        'pe',
        'ane',
        // 'class'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
