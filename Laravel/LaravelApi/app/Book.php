<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property
 */

class Book extends Model
{
    protected $fillable = [
        'title',
        'year'
    ];
}
