<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
	use HasFactory;

	public $timestamps = false;

	protected $table = 'faq';
	protected $primary_key = 'id';
	protected $fillable = [
		'answer', 'question'
	];
}
