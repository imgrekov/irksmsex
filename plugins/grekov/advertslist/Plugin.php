<?php

namespace Grekov\AdvertsList;

use Event;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{

	public function pluginDetails()
	{
		return [
			'name'        => 'Объявления',
			'description' => 'Самописный плагин для вывода и хранения объявлений',
			'author'      => 'Gregar Grekov',
			'icon'        => 'adn',
		];
	}

	public function registerComponents()
	{
		return [
			'Grekov\AdvertsList\Components\CreateAdvert' => 'createAdvert',
			'Grekov\AdvertsList\Components\EditAdvert' => 'editAdvert',
		];
	}
}
