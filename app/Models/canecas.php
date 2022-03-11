<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class canecas extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'cor',
        'quantidade',
        'valor',
    ];
}
