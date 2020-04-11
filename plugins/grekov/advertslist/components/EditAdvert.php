<?php

namespace Grekov\AdvertsList\Components;

use Cms\Classes\ComponentBase;
use Grekov\AdvertsList\Models\Advert as AdvertFather;
use Input;
use Redirect;

class EditAdvert extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name' => 'Edit advert form',
      'description' => 'Editing advert in database'
    ];
  }

  public function defineProperties()
  {
    return [
      'basicPrice' => [
        'title' => 'Цена за обычное объявление',
        'description' => 'Сколько брать с клиента за обычное объявление?',
        'default' => 15,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Введите число',
      ],
      'vipPrice' => [
        'title' => 'Цена за VIP объявление',
        'description' => 'Сколько брать с клиента за вип?',
        'default' => 50,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Введите число',
      ],
      'xvipPrice' => [
        'title' => 'Цена за xVIP объявление',
        'description' => 'Сколько брать с клиента за xVIP?',
        'default' => 250,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Введите число',
      ],
      'hihglightPrice' => [
        'title' => 'Цена за выделение',
        'description' => 'Сколько брать с клиента за выделение объявления?',
        'default' => 10,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Введите число',
      ],
    ];
  }

  public $basicPrice, $vipPrice, $xvipPrice, $hihglightPrice;

  public function onRun()
  {
    $this->basicPrice = $this->property('basicPrice');
    $this->vipPrice = $this->property('vipPrice');
    $this->xvipPrice = $this->property('xvipPrice');
    $this->hihglightPrice = $this->property('hihglightPrice');
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

    return Redirect::to('../advert/edit-success');
  }

  public function onEditDelete()
  {
    AdvertFather::find((int) post('id'))->delete();

    return Redirect::to('../advert/delete-success');
  }
}
