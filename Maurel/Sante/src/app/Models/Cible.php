<?php


namespace Dtic\Maurel\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cible extends Model{
    use HasFactory;
    protected $table = "cibles";
    protected $guarded = [];
}
