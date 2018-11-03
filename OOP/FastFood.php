<?php

/**
Некая сеть фаст-фудов предлагает несколько видов гамбургеров:
	маленький (50 рублей, 20 калорий);
	большой (100 рублей, 40 калорий).
Гамбургер может быть с одним из нескольких видов начинок (обязательно):
	сыром (+ 10 рублей, + 20 калорий);
	салатом (+ 20 рублей, + 5 калорий);
	картофелем (+ 15 рублей, + 10 калорий).
Дополнительно, гамбургер можно посыпать приправой (+ 15 рублей, 0 калорий) и полить майонезом (+ 20 рублей, + 5 калорий).
Напишите программу, рассчитывающую стоимость и калорийность гамбургера
*/
class FastFood
{
    // const SMALL_SIZE = false;
    // const BIG_SIZE = false;
    // const STUFFING_CHEESE = false;
    // const STUFFING_SALAD = false;
    // const STUFFING_POTATO = false;
    // const TOPPING_MAYO = false;
    // const TOPPING_SPICE = false;
//    public $smallSize;
//    public $bigSize;
//    public $toppingMayo;
//    public $toppingSpice;
//    public $stuffingCheese;
//    public $stuffingSalad;
//    public $stuffingPotato;

    private $size;
    private $stuffing;
    private $topping = [];
    // private $arr = $this->getTopping();

    public function __construct($size, $stuffing)
    {
        if (is_string($size) && is_string($stuffing)) {
            $this->_setSize($size);
            $this->_setStuffing($stuffing);
        } else {
            echo 'Переданные параметры не являются строкой';
        }
    }

    private function _setSize($size)
    {
        if ($size === 'small') {
            $this->size = 'small';
        }
        if ($size === 'big') {
            $this->size = 'big';
        }
    }

    private function _setStuffing($stuffing)
    {
        if ($stuffing === 'cheese') {
            $this->stuffing = 'cheese';
        }
        if ($stuffing === 'salad') {
            $this->stuffing = 'salad';
        }
        if ($stuffing === 'potato') {
            $this->stuffing = 'potato';
        }
    }

    /**
      * Добавление дополнительной добавки.
     */
    public function _setTopping($topping)
    {
        if ($topping === 'mayo') {
            $this->topping[0] = 'mayo';
        }
        if ($topping === 'spice') {
            $this->topping[0] = 'spice';
        }
        if ($topping === 'twin') {
            $this->topping[0] = 'spice';
            $this->topping[1] = 'mayo';    
        }
        
        // for ($i = 0; $i < count($this->topping); $i++) {
        //     if ($this->topping[$i] !== null) {
        //         $result = $this->topping[$i];
        //     }
        // } 
        // return $result;
    }

    /**
      * Получаем массив добавок.
     */
    public function getTopping()
    {
        return $this->topping;
    }

    /**
      * Убираем добавку, если она есть.
     */    
    public function removeTopping()
    {
        for ($i = 0; $i < count($this->topping); $i++) {
            if ($this->topping[$i] !== null) {
                unset($this->topping[$i]);
            }
        }
        return $this->topping;
    }

    /**
      * Получаем размер гамбургера.
     */
    public function getSize() 
    {
        return $this->size;
    }

    /**
      * Получаем начинку.
     */
    public function getStuffing() 
    {
        return $this->stuffing;
    }

    /**
      * Вычисляем стоимость гамбургера.
     */
    public function calculatePrice() 
    {
        if ($this->getSize() === 'small') {
            $result = 50;
        }
        if ($this->getSize() === 'big') {
            $result = 100;
        }
        if ($this->getStuffing() === 'cheese') {
            $result += 10;
        }
        if ($this->getStuffing() === 'salad') {
            $result += 20;
        }
        if ($this->getStuffing() === 'potato') {
            $result += 10;
        }
        if ($this->topping === 'spice') {
            $result += 15;
        }

        return $result;
    }

    /**
      * Вычисляем калорийность.
     */
    public function calculateCalories() 
    {
       if ($this->getSize() === 'small') {
            $result = 20;
        }
        if ($this->getSize() === 'big') {
            $result = 40;
        }
        if ($this->getStuffing() === 'cheese') {
            $result += 20;
        }
        if ($this->getStuffing() === 'salad') {
            $result += 5;
        }
        if ($this->getStuffing() === 'potato') {
            $result += 10;
        }

        return $result;
    }
}

$hamburger = new FastFood('small', 'cheese');
$hamburger->_setTopping('spice');
// $hamburger->getTopping();
// $hamburger->removeTopping();
var_dump($hamburger);
// var_dump($hamburger->getTopping());
var_dump($hamburger->calculatePrice());
// echo $hamburger->getTopping();
