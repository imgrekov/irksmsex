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
    $advert = AdvertFather::find((int) post('id'));

    $advert->text = post('text');
    $advert->category = post('category');
    $advert->type = post('type');
    $advert->state = post('state');
    $advert->highlight = post('highlight');
    $advert->attachimage1 = Input::file('attachimage1');
    $advert->attachimage2 = Input::file('attachimage2');
    $advert->attachimage3 = Input::file('attachimage3');

    // if (Input::hasFile('attachimage1')) {
    //   $advert->image1 = Input::file('attachimage1');
    // }

    $advert->save();

  }

  public function onEditDelete()
  {
    AdvertFather::find((int) post('id'))->delete();
  }
}
