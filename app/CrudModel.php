<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CrudModel extends Model
{
    public $fillable = ['nama','judul'];
    public $table = 'cruds';
}
