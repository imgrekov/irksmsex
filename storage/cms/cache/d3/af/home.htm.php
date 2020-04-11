<?php 
use Grekov\AdvertsList\Models\Advert;class Cms5e90651289286617048049_0cec90b5ff59087fc383d74da8ae2423Class extends Cms\Classes\PageCode
{
  
public function onStart()
  {
    $this['countOnaOn'] = Advert::query()->where('category', '=', 'categories-ona-on')->where('state', '=', 'on')->count();
    $this['countOnOna'] = Advert::query()->where('category', '=', 'categories-on-ona')->where('state', '=', 'on')->count();
    $this['countOnOn'] = Advert::query()->where('category', '=', 'categories-on-on')->where('state', '=', 'on')->count();
    $this['countOnaOna'] = Advert::query()->where('category', '=', 'categories-ona-ona')->where('state', '=', 'on')->count();
    $this['countFree'] = Advert::query()->where('category', '=', 'categories-free')->where('state', '=', 'on')->count();
    $this['countServices'] = Advert::query()->where('category', '=', 'categories-services')->where('state', '=', 'on')->count();
    $this['countFamily'] = Advert::query()->where('category', '=', 'categories-family')->where('state', '=', 'on')->count();
    $this['countFlirt'] = Advert::query()->where('category', '=', 'categories-flirt')->where('state', '=', 'on')->count();
    $this['countRealty'] = Advert::query()->where('category', '=', 'categories-realty')->where('state', '=', 'on')->count();
    $this['countArenda'] = Advert::query()->where('category', '=', 'categories-arenda')->where('state', '=', 'on')->count();
    $this['countWork'] = Advert::query()->where('category', '=', 'categories-work')->where('state', '=', 'on')->count();
  }
}
