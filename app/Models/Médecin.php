<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Médecin extends Model
{
    protected $fillable=[
        "nom",
        "prénom",
        "numero",
        "e-mail",
    ];
}
