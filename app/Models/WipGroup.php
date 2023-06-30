<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WipGroup extends Model
{
    public $increment = false;
    protected $keyType = "string";
    protected $primaryKey = "group_id";
    use HasFactory;
}
