<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenericContent extends Model
{
    use SoftDeletes;
    protected $fillable = ['key', 'value', 'value_ar'];
}
