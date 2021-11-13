<?php

namespace App;

use App\Model;

class Bar extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'about','adress','image', 'language', 'code', 'theme',
    ];

  

}
