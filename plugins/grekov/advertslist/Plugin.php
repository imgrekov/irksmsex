<?php

namespace Grekov\AdvertsList;

use Event;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
	public function registerComponents()
	{
		return [
			'Grekov\AdvertsList\Components\CreateAdvert' => 'createAdvert',
			'Grekov\AdvertsList\Components\EditAdvert' => 'editAdvert',
		];
	}
}
