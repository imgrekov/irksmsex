<?php

namespace Grekov\AdvertsList\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Model;
use System\Models\File;

class Advert extends Model
{
	use \October\Rain\Database\Traits\Validation;

	const XVIP = 'xvip';

	/**
	 * @var string The database table used by the model.
	 */
	public $table = 'grekov_advertslist_ads';

	public $attachOne = [
		'attachimage1' => File::class,
		'attachimage2' => File::class,
		'attachimage3' => File::class,
	];

	/**
	 * @var array Validation rules
	 */
	public $rules = [
		'text' => 'required',
		'type' => 'required',
	];

	public function getImageCountAttribute()
	{
		$count = 0;
		foreach ($this->attachOne as $item => $type) {
			$count += (int) isset($this->{$item});
		}
		return $count;
	}

	protected static function boot()
	{
		parent::boot();

		static::addGlobalScope('active', function (Builder $builder) {
			$builder->where(function ($query) {
				$query->where('type', '!=', self::XVIP)
					->orWhereNull('type')
					->orWhere(function ($query) {
						$query->where('type', '=', self::XVIP)
							->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString());
					});
			});
		});
	}
}
