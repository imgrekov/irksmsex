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

class CreateAdvert extends ComponentBase
{

  public function componentDetails()
  {
    return [
      'name' => 'Create advert form',
      'description' => 'Creating advert in database'
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

  // public function getFormSignature($account, $desc, $sum, $secretKey)
  // {
  //   $hashStr = $account . '{up}' . $desc . '{up}' . $sum . '{up}' . $secretKey;
  //   return hash('sha256', $hashStr);
  // }

  // public function getSignature($method, array $params, $secretKey)
  // {
  //   ksort($params);
  //   unset($params['sign']);
  //   unset($params['signature']);
  //   array_push($params, $secretKey);
  //   array_unshift($params, $method);
  //   return hash('sha256', join('{up}', $params));
  // }
  // 
  // $sum = post('sum');
  // $account = post('author');
  // $desc = "Создать объявление";
  // $publicKey = "300491-5033b";
  // $secretKey = "90ba161bdeb904ec4e03e349070de910";
  // $signature = $this->getFormSignature($account, $desc, $sum, $secretKey);

  // $url = "https://unitpay.money/pay/" . $publicKey . "?sum=" . $sum . "&account=" . $account . "&desc=" . $desc . "&signature=" . $signature;

  // dd($url);

  // Redirect::to($url);

  // if (…) {
  // } else {
  //   throw new ApplicationException('error');
  //   break;
  // }

  public function onCreateAdvert()
  {

    $advert = new Advert();

    $advert->text = post('text');
    $advert->type = post('type');
    $advert->category = post('category');
    $advert->highlight = post('highlight');
    $advert->author = post('author');
    $advert->sum = post('sum');

    foreach ($advert->attachOne as $name => $type) {
      if (Input::hasFile($name)) {
        // var_dump($name);
        // $advert->{$name} = Input::file($name);

        $image = Input::all();
        $file = (new File())->fromPost($image[$name]);
        $advert->{$name} = $file;

        // $res = $name->getPath();
        // dd($file);
      } elseif (isset($advert->{$name}) && input($name . 'del')) {
        $advert->{$name}->delete();
      }
    }

    if ($advert->type == 'xvip') {
      $quantityXvip = Advert::query()->where('type', 'xvip')->where('category', $advert->category)->count();
      if ($quantityXvip > 0) {
        throw new ApplicationException('Объявление с&nbsp;типом SUPER уже созданно в&nbsp;этой категории. Выберите другой тип.');
      }
    }

    // dd($advert->attachimage1->getPath());

    $advert->save();
    Flash::success('Объявление создано успешно!');
    return Redirect::to('/user/profile/');
  }

  public function onTest()
  {
    $account = post('account');

    $publicKey = "300491-5033b";
    $desc = "Создать объявление";
    $sum = 1;
    $secretKey = "90ba161bdeb904ec4e03e349070de910";
    $signature = $this->getFormSignature($account, $desc, $sum, $secretKey);

    $url = "https://unitpay.money/pay/" . $publicKey . "?sum=" . $sum . "&account=" . $account . "&desc=" . $desc . "&signature=" . $signature;

    dd($url);

    return Redirect::to($url);
  }

  public function onGetSignature()
  {
    $method = 'pay';
    $params = [
      "account" => post('account'),
      "date" => Carbon::now()->toDateTimeString(),
      "projectId" => "300491",
      "payerSum" => "1",
      "orderSum" => "1",
      "test" => "1"
    ];
    $secretKey = "90ba161bdeb904ec4e03e349070de910";
    $signature = $this->getSignature($method, (array) $params, $secretKey);

    $url = "http://irksmsex.ru/pay-check/" . "?method=" . $method . "&account=" . $params['account'] . "?date=" . $params['date'] . "&projectId=" . $params['projectId'] . "&orderSum=" . $params['orderSum'] . "&signature=" . $signature . "&test=" . $params['test'];
    dd($url);

    return Redirect::to($url);
  }
}
