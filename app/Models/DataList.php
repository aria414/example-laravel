<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataList extends Model
{
    //use HasFactory;

    //Associate the table with the model
     protected $table = '_list';
     protected $fillable = [ 'id', 'listItem', 'author'];
     public $timestamps = false;
}
