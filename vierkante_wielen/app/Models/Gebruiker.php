<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gebruiker extends Model
{
    protected $fillable = ['voornaam', 'achternaam', 'email', 'mobiel', 'plaats', 'postcode', 'adres', 'opmerkingen'];
}

