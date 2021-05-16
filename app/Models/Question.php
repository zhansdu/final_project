<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	use HasFactory;

	public $timestamps = false;

	protected $table = 'questions';
	protected $primary_key = 'id';
	protected $fillable = [
		'date', 'mail', 'question', 'answered'
	];
}
