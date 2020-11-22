<?php

namespace Grekov\AdvertsList;

use System\Classes\PluginBase;
use Event;
use Grekov\AdvertsList\Models\Advert;


class Plugin extends PluginBase
{

	public function pluginDetails()
	{
		return [
			'name'        => 'Объявления',
			'description' => 'Самописный плагин для вывода и хранения объявлений',
			'author'      => 'Gregar Grekov',
			'icon'        => 'icon-adn',
		];
	}

	public function registerComponents()
	{
		return [
			'Grekov\AdvertsList\Components\CreateAdvert' => 'createAdvert',
			'Grekov\AdvertsList\Components\EditAdvert' => 'editAdvert',
		];
	}

	public function boot()
	{
		Event::listen('rainlab.user.deactivate', function ($user) {
			Advert::all()->where('author', $user->email)->update(['state' => '']);
		});
	}
}
