<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name'];

    // Defining relationship
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }

}
