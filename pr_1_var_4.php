<?php
require_once 'index.php';

class MailAdress{
  private $index;
  private $country;
  private $city;
  private $street;
  private $house;

  public function __construct(){
    echo 'Adress: <br/><br/>';
    $this ->index = '344065';
    $this ->country = 'Russia';
    $this ->city = 'Rostov-on-Don';
    $this ->street = 'Lenina';
    $this ->house = '666';
  }

  public function __destructor(){
    echo 'Поля уничтожены';
  }

  public function __getIndex(){
    return $this->index;
  }

  public function __getCountry(){
    return $this->country;
  }

  public function __getCity(){
    return $this->city;
  }

  public function __getStreet(){
    return $this->street;
  }

  public function __getHouse(){
    return $this->house;
  }


  public function __setIndex($index){
    $this->index = '344065';
  }

  public function __setContry($country){
    $this->country = 'Russia';
  }

  public function __setCity($city){
    $this->city = 'Rostov-on-Don';
  }

  public function __setStreet($street){
    $this->street = 'Lenina';
  }

  public function __setHouse($house){
    $this->house = '666';
  }
  public function show(){
    echo 'Индекс: '.$this->index.'<br/> Страна:'.$this->country.'<br/> Город: '.$this->city.'<br/> Улица: '.$this->street.'<br/> Дом: '.$this->house.'<br />';
  }
}
