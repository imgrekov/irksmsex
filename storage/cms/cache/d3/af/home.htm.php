<?php 
use Grekov\AdvertsList\Models\Advert;class Cms5e8f4981cd4f4384318952_dae1c7b910d0d9306a5e1c6536647226Class extends Cms\Classes\PageCode
{
  
public function onStart()
  {
    $this['countOnaOn'] = count(Advert::where('category', '=', 'categories-ona-on')->where('state', '=', 'on')->get());
    $this['countOnOna'] = count(Advert::where('category', '=', 'categories-on-ona')->where('state', '=', 'on')->get());
    $this['countOnOn'] = count(Advert::where('category', '=', 'categories-on-on')->where('state', '=', 'on')->get());
    $this['countOnaOna'] = count(Advert::where('category', '=', 'categories-ona-ona')->where('state', '=', 'on')->get());
    $this['countFree'] = count(Advert::where('category', '=', 'categories-free')->where('state', '=', 'on')->get());
    $this['countServices'] = count(Advert::where('category', '=', 'categories-services')->where('state', '=', 'on')->get());
    $this['countFamily'] = count(Advert::where('category', '=', 'categories-family')->where('state', '=', 'on')->get());
    $this['countFlirt'] = count(Advert::where('category', '=', 'categories-flirt')->where('state', '=', 'on')->get());
    $this['countRealty'] = count(Advert::where('category', '=', 'categories-realty')->where('state', '=', 'on')->get());
    $this['countArenda'] = count(Advert::where('category', '=', 'categories-arenda')->where('state', '=', 'on')->get());
    $this['countWork'] = count(Advert::where('category', '=', 'categories-work')->where('state', '=', 'on')->get());
  }
}
