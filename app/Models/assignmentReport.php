<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class assignmentReport extends Model
{
    use HasFactory;

    protected $table = "assignment_reports";
    protected $fillable = [
        'user_id',
        'assignment_id',
        'status',
        'note',

    ];

    protected $timestamp = true;
}
