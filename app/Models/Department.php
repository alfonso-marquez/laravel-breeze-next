<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_title',
        'department_code',
        'department_details',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
