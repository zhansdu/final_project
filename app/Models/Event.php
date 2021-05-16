<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	use HasFactory;

	public $timestamps = false;

	protected $table = 'events';
	protected $primary_key = 'id';
	protected $fillable = [
		'time', 'date', 'place', 'name', 'description'
	];
}
