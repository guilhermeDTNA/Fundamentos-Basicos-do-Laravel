<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // Permitir atribuição em massa para os campos type e document_number
    protected $fillable = ["type", "document_number"];
}
