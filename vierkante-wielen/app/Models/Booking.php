<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'start_date', 'end_date', 'auto_type', 'leerlingid', 'instructeurid', 'opmerking'];

    public function instructeur() : HasOne
    {
        return $this->hasOne(User::class, 'instructeurid');
    }
    public function leerling() : HasOne
    {
        return $this->hasOne(User::class, 'leerlingid');
    }
}
