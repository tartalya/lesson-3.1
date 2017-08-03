<?php

class car {

    public $color;
    private $maxSpeed;
    public $wheels = 4;
    private $speed = 0;
    public $model;

    public function __construct($color, $model) {

        $this->model = $model;
        $this->color = $color;
    }

    public function throttle($speed) {

        $this->speed = $speed;
        return $this->speed;
    }

    public function getSpeed() {
        
        return $this->speed;
        
    }
}

class tv {

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

class pen {

    private $color; //Пожалуй самое распространненое свойство
    private $inkAmount; // %
    private $inkColor = 'blue';
    private $text;
    
    public function write($text) {

        $this->text .= $text . '<br>';
        
        return true;
    }
    
    public function showText() {
        
        return $this->text;
        
    }

}

class urinal {

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

class product {

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

class news {
    
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
        
            
        $this->string .= $this->categoty[$key] . '<br>' . $this->date[$key] .'<br>' . $this->text[$key] . '<br><br>';
        
        }
        
        return $this->string;
        
         
    }
    
}