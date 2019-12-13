<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Costumer extends Model
{
    public function command()
    {
        return $this->belongsToMany("App\Command");
    }
}
