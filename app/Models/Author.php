<?php

namespace App\Models;

use Eloquent;

class Author extends Eloquent
{

    public function author()
    {
        return $this->hasMany('App\Models\Book');
    }

}
