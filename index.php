<?php

require_once'classes.php';


$myCar = new Car('black', 'nexia');

echo 'Моя машина ' . $myCar->getModel(); // А вообще у меня нет машины
echo '<br>';


echo 'Моя машина ' . $myCar->color . ' Цвета';
echo '<br>';

echo 'Разгоняемся до 100км/час';
echo '<br>';
echo 'Теперь наша скорость ' . $myCar->throttle(100) . 'км/час';
echo '<br>';
echo 'У моей машины ' . $myCar->wheels . ' колеса';

echo '<br>';


$wifeCar = new Car('white', 'bmv');


echo 'Машина моей жены ' . $wifeCar->getModel(); // и у жены тоже нет машины
echo '<br>';
echo 'Цвет машины жены ' . $wifeCar->color;
echo '<br>';

//$wifeCar->throttle(50);

if ($wifeCar->getSpeed() > 0) {
echo 'Теперь наша скорость ' . $wifeCar->getSpeed() . 'км/час';
}
    else {
        
        echo 'Машина стоит во дворе';
        
    }

echo '<br>';

$myPen = new Pen();

$myPen->write('Этот текст я написал сначала');
$myPen->write('А потом я решил дописать еще немного текста');

echo $myPen->showText(); 


$unknowPen = new Pen();

$unknowPen->write('А потом я нашел на полу какую то ручку и написал еще одно предложение ею');

echo $unknowPen->showText();


$tvInRoom = new Tv();
$tvInkitchen = new Tv();

$tvInkitchen->show(7); //Переключим канал на кухонном телевизоре

$urinal = new Urinal();

$urinal->piss('90');

$mySmartphone = new Product('xiaomi redmi note 2', 'white', 10000, 100, 'phones');
$notMySmartphone = new Product('iphone 7', 'black', 60000, 100, 'phones');

$mySmartphone->setPrice('8500'); //откорректируем цену

echo 'Мой смартфон стоит ' . $mySmartphone->showprice() . 'руб.';

echo '<br><br>';
echo 'Минутка новостей'; 

$news = new News();

$news->add('Мосгорсуд заменил на штраф в 200 тысяч рублей наказание инвалиду-колясочнику Антону Мамаеву, ранее осужденному на 4,5 года колонии за разбойное нападение, передает корреспондент РИА Новости из зала суда.', 'politics');
$news->add('При взрыве на военном складе в Абхазии погибли две россиянки, сообщил РИА Новости пресс-секретарь МЧС республики Мизан Ломия.', 'politics');

echo'<br><br>';



echo $news->show();

