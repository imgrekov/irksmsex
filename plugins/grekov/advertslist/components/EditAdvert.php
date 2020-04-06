<?php

namespace Grekov\AdvertsList\Components;

use Cms\Classes\ComponentBase;
use Grekov\AdvertsList\Models\Advert as AdvertFather;
use Input;
// use System\Models\File;

class EditAdvert extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name' => 'Form edit advert',
      'description' => 'Editing advert in database'
    ];
  }

  public function onEditAdvert()
  {
      /** @var AdvertFather|mixed $advert */
      $advert = AdvertFather::find((int) post('id'));

    $advert->text = post('text');
    $advert->category = post('category');
    $advert->type = post('type');
    $advert->state = post('state');
    $advert->highlight = post('highlight');

    foreach ($advert->attachOne as $name => $type) {
        if (Input::hasFile($name)) {
            $advert->{$name} = Input::file($name);
        } elseif (isset($advert->{$name}) && input($name . 'del')) {
            $advert->{$name}->delete();
        }
    }

    $advert->save();
  }

  public function onEditDelete()
  {
    AdvertFather::find((int) post('id'))->delete();
  }
}
