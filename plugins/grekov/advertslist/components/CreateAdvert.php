<?php

namespace Grekov\AdvertsList\Components;

use Cms\Classes\ComponentBase;
use Grekov\AdvertsList\Models\Advert as AdvertFather;
use Redirect;
use Input;
use ApplicationException;

class CreateAdvert extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name' => 'Create advert form',
      'description' => 'Creating advert in database'
    ];
  }

  public function onCreateAdvert()
  {
    $advert = new AdvertFather();
    
    $advert->text = post('text');
    $advert->type = post('type');
    $advert->category = post('category');
    $advert->highlight = post('highlight');
    $advert->author = post('author');
    $advert->state = "on";
    
    foreach ($advert->attachOne as $name => $type) {
      if (Input::hasFile($name)) {
        $advert->{$name} = Input::file($name);
      } elseif (isset($advert->{$name}) && input($name . 'del')) {
        $advert->{$name}->delete();
      }
    }
    
    if ($advert->type == 'xvip') {
      $hasXvip = AdvertFather::query()->where('type', '=', 'xvip')->where('category', '=', $advert->category)->count();
      if ($hasXvip > 0) {
        throw new ApplicationException('Объявление с&nbsp;типом xvip уже созданно в&nbsp;этой категории. Выберите другой тип.');
      }
    }

    $advert->save();
    return Redirect::to('../advert/create-success');
  }
}
