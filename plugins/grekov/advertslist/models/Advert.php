<?php

namespace Grekov\AdvertsList\Models;

use Model;
use System\Models\File;

class Advert extends Model
{
	use \October\Rain\Database\Traits\Validation;

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'grekov_advertslist_ads';

	public $attachOne = [
		'attachimage1' => 'System\Models\File',
		'attachimage2' => 'System\Models\File',
		'attachimage3' => 'System\Models\File',
	];

	/**
	 * @var array Validation rules
	 */
	public $rules = [];
}
