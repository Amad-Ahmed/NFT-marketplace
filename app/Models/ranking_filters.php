<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ranking_filters extends Model
{
    use HasFactory;
    protected $table ="ranking_filters";
    protected $primaryKey="ID";
    public $timestamps=false;
}
