<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = [
    'user_id', 'category_id', 'ticket_id', 'title', 'priority', 'message', 'status'
];

    // Defining relationship
    public function category()
    {
        return $this->belongsTo(Ticket::class);
    }

}
