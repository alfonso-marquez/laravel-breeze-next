<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        'position_title',
        'position_code',
        'position_details',
        'department_id',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function Department()
    {
        return $this->belongsTo(Department::class);
    }
}
