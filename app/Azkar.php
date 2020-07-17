<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Azkar extends Model
{

    protected $table="azkars";
    protected $guarded = ['id', 'created_at', 'updated_at'];
}
