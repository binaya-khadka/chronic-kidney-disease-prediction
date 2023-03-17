<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'age',
        'email',
        'phone',
        'password'
    ];
    protected $hidden = [
        'password',
    ];

    public function analyses()
    {
        return $this->hasOne(Analysis::class, 'id');
    }
}
