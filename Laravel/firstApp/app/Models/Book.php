<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

    class Book extends Model
    {
        protected $fillable = [ // access only this param
            'title',
            'author',
            'pages'
        ];
    }

?>
