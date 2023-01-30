<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory;
    use SoftDeletes;

     protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'suffix_name',

        'gender',
        'birth_date',
        'user_id',
        'department_id',
        'position_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function department()
    {
        return $this->hasOne(Department::class);
    }

    public function position()
    {
        return $this->hasOne(Position::class);
    }
}   
