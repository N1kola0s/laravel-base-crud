<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sales_date', 'type'];
}
