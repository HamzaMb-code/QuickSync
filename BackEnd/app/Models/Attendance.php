<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'user_id',
        'employee_name',
        'dept',
        'date',
        'checked_in_at',
        'checked_out_at',
        'break_started_at',
        'break_minutes',
        'note',
    ];

    protected $casts = [
        'date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
