<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lake extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'lake';
    protected $fillable = ['name'];

    const VALIDATION = [
        'name' => ['required', 'min:3', 'max:60', 'regex:/^[a-zA-Z ]+$/']
    ];
}
