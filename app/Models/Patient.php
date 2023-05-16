<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=[
        "nom",
        "prenom",
        "adresse",
        "numero",
        "age",
        "vaccin",
        "raçe",
        "message",

    ];
}
