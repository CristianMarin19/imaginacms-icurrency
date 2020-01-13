<?php

namespace Modules\Icurrency\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use Translatable;

    protected $table = 'icurrency__currencies';
    public $translatedAttributes = [];
    protected $fillable = [];
}
