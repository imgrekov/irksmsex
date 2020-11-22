<?php

namespace Grekov\AdvertsList\Components;

use Cms\Classes\ComponentBase;
use Grekov\AdvertsList\Models\Advert;
use Input;
use System\Models\File;
use Flash;
use Redirect;
use ApplicationException;
use Carbon\Carbon;

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
        'default' => 150,
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
      'upPrice' => [
        'title' => 'Цена за поднятие',
        'description' => 'Сколько брать с клиента за поднятие объявления?',
        'default' => 50,
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'Введите число',
      ],
    ];
  }

  public $basicPrice, $vipPrice, $xvipPrice, $hihglightPrice, $upPrice;

  public function onRun()
  {
    $this->basicPrice = $this->property('basicPrice');
    $this->vipPrice = $this->property('vipPrice');
    $this->xvipPrice = $this->property('xvipPrice');
    $this->hihglightPrice = $this->property('hihglightPrice');
    $this->upPrice = $this->property('upPrice');
  }

  public function onEditAdvert()
  {
    /** @var Advert|mixed $advert */
    $advert = Advert::find((int) post('id'));

    $advert->text = post('text');
    $advert->category = post('category');
    $advert->type = post('type');
    $advert->highlight = post('highlight');

    foreach ($advert->attachOne as $name => $type) {
      if (Input::hasFile($name)) {
        // $advert->{$name} = Input::file($name);
        // dd($advert->{$name});

        $image = Input::all();
        $file = (new File())->fromPost($image[$name]);
        $advert->{$name} = $file;
      } elseif (isset($advert->{$name}) && input($name . 'del')) {
        $advert->{$name}->delete();
      }
    }

    $super = post('super');
    if ($advert->type == 'xvip' and $super == FALSE) {
      $quantityXvip = Advert::query()->where('type', 'xvip')->where('category', $advert->category)->count();
      if ($quantityXvip > 0) {
        throw new ApplicationException('Объявление с типом SUPER уже созданно в&nbsp;этой категории. Выберите другой тип');
      }
    }

    $advert->save();
    Flash::success('Объявление изменено успешно!');
    return Redirect::to('/user/profile/');
  }


  public function onEditAdvertActivate()
  {
    $advert = Advert::find((int) post('id'));
    $advert->created_at = Carbon::now()->toDateTimeString();
    $advert->state = "on";

    $advert->save();
    Flash::success('Вы активировали объявление!');
    return Redirect::to('/user/profile/');
  }


  public function onEditAdvertDeactivate()
  {
    $advert = Advert::find((int) post('id'));
    $advert->state = "";

    $advert->save();
    Flash::success('Вы деактивировали объявление!');
    return Redirect::to('/user/profile/');
  }

  public function onEditAdvertUp()
  {
    $advert = Advert::find((int) post('id'));
    $advert->created_at = Carbon::now()->toDateTimeString();

    $advert->save();
    Flash::success('Объявление пондято успешно!');
    return Redirect::to('/user/profile/');
  }


  public function onEditAdvertDelete()
  {
    Advert::find((int) post('id'))->delete();
    Flash::success('Объявление удалено успешно!');
    return Redirect::to('/user/profile/');
  }
}
