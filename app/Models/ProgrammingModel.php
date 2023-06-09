<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgrammingModel extends Model
{
    use HasFactory;
    protected $table = "programming";
    protected $fillable = [
        "name",
        "description"
    ];
}
