<?php

namespace App\Models;

use Eloquent;

class Book extends Eloquent
{

    public function bookAuthor()
    {
        return $this->belongsTo('App\Models\Author', 'author', 'id');
    }

}
