<?php

class Car
    {

    public $color;
    private $maxSpeed;
    public $wheels = 4;
    private $speed = 0;
    private $model;

    public function __construct($color, $model) {

        $this->model = $model;
        $this->color = $color;
    }

    public function getModel() {

        return $this->model;
    }

    public function throttle($speed) {

        $this->speed = $speed;

        return $this->getSpeed();
    }

    public function getSpeed() {

        return $this->speed;
    }

    }

class Tv
    {

    private $color = 'black'; //в большистве случаев, так что примем за дефолт
    private $screenSize;
    private $currentShow;
    private $channel;
    private $model;

    public function show($channel) {

        // $this->currentShow = getChannelName($channel, time()) {} а тут можно сходить куданнибудь в интернет за программой телепередач
        // и узнать что там сейчас показывают
        $this->channel = $channel;
    }

    }

class Pen
    {

    private $color; //Пожалуй самое распространненое свойство
    private $inkAmount = 100; // %
    private $inkColor;
    private $text;
    public static $paper;

    public function __construct($color = 'black', $inkColor = 'blue') {

        $this->color = $color;
        $this->inkColor = $inkColor;
    }

    public function write($text) {

        $this->inkAmount = round($this->inkAmount - strlen($text) / 100); //Предположим что расход 1 процент на 100 символов
        $this->text = $text . '<br>';
        self::$paper .= $text . '<br>';
        
        echo $this->text;
        
        return true; 
    }

    public function showText() {

        return $this->text;
    }

    public function checkInk() {

        return $this->inkAmount;
    }

    }

class Urinal
    {

    private $color;
    private $material = 'iron';
    private $capacity = 0; // при создании она несомнено чистая 
    private $maxCapacity;
    private $model;

    public function __construct($model = 'Самая обычная', $maxCapacity = 100) {

        $this->model = $model;
        $this->maxCapacity = $maxCapacity;
    }

    public function piss($amount) {

        if ($this->maxCapacity > $amount) {
            $this->capacity = $this->maxCapacity - $amount;
            return true;
        } else {

            echo 'Пора бы вылить';
            return false;
        }
    }

    }

class Product
    {

    private $color;
    private $price;
    private $category;
    private $size;
    private $madein;
    private $discount;
    private $model;

    public function __construct($model, $color, $price, $size, $category = 'other products', $madein = 'china', $discount = 0) {

        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
        $this->category = $category;
        $this->size = $size;
        $this->madein = $madein;
        $this->discount = $discount;
    }

    public function showprice() {


        return $this->price;
    }

    public function setPrice($price) {


        if ($price <= 0) {

            echo 'Неправильная цена, вы наверно ошиблись при вводе';
            return false;
        } else {
            $this->price = $price;  // переопределяем цену установленную при создании экземпляра

            return true;
        }
    }

    }

class NewsPaper
    {

    private $text;
    private $date;
    private $categoty;
    private $string;

    public function add($text, $category = 'other') {

        $this->date[] = date("F j, Y, G:i G", strtotime("+3 hours"));
        $this->text[] = $text;
        $this->categoty[] = $category;
    }

    public function show() {



        foreach ($this->text as $key => $value) {


            $this->string .= $this->categoty[$key] . '<br>' . $this->date[$key] . '<br>' . $this->text[$key] . '<br><br>';
        }

        return $this->string;
    }

    }
