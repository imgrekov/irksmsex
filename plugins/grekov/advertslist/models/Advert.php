<?php

namespace Grekov\AdvertsList\Models;

use Model;

class Advert extends Model
{
	use \October\Rain\Database\Traits\Validation;

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'grekov_advertslist_ads';

	public $fillable = [
		'text',
		'type',
		'category',
		'state',
		'highlight',
		'author',
		'image1',
		'image2',
		'image3',
	];

	public $attachOne = [
		'image1' => 'System\Models\File',
		'image2' => 'System\Models\File',
		'image3' => 'System\Models\File',
	];

	/**
	 * @var array Validation rules
	 */
	public $rules = [];
}
