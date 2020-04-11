<?php 
use Grekov\AdvertsList\Models\Advert;class Cms5e919bebc6702664008492_035b07ea5dc9d784267ea465afd8850aClass extends Cms\Classes\PageCode
{

public function onStart()
  {
    $this['hasXVip'] = Advert::query()->where('type', Advert::XVIP)->get();
  }
}
