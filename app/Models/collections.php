<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class collections extends Model
{
    use HasFactory;
    protected $table ="collections";
    protected $primaryKey="ID";
}
