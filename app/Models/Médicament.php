<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Médicament extends Model
{
    protected $fillable=[
        "nom",
        "famille",
        "type",
        "type",
    ];
}
