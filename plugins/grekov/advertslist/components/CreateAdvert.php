<?php

namespace Grekov\AdvertsList\Components;

use Cms\Classes\ComponentBase;
use Grekov\AdvertsList\Models\Advert as AdvertFather;

class CreateAdvert extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name' => 'Form create advert',
      'description' => 'Creating advert in database'
    ];
  }

  public function onCreateAdvert()
  {
    $advert = new AdvertFather();

    $advert->text = post('text');
    $advert->category = post('category');
    $advert->author = post('author');
    
    $advert->save();
  }
}
 