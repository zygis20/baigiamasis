<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'personal_code',
        'email',
        'hooks',
        'fishing_rods',
        'lake',
        'start_date',
        'end_date',

    ];

    const VALIDATION = [
        'first_name' => ['required', 'min:3', 'max:60', 'regex:/^[a-zA-Z ]+$/'],
        'last_name' => ['required', 'min:3', 'max:60', 'regex:/^[a-zA-Z ]+$/'],
        'personal_code' => ['required', 'digits:11'],
        'email' => ['required', 'email'],
        'hooks' => ['required', 'integer', 'min:1'],
        'fishing_rods' => ['required', 'integer', 'min:1'],
        'lake' => ['required', 'array', 'exists:lake,id'],
        'start_date' => ['required', 'date', 'after:yesterday'],
        'end_date' => ['required', 'date', 'after_or_equal:start_date'],
    ];
}
