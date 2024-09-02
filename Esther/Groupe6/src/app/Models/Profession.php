<?php


namespace Dtic\Esther\app\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
	use HasFactory;
    protected $guarded;

    protected $table = "professions";
}