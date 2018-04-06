<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    protected $fillable = ['iphone', 'problem', 'first_name', 'last_name', 'email', 'number', 'address', 'zip_code', 'note','category_id'];
}
