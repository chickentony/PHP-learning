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
    private $topping;

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

    public function getHamburger()
    {
        return $this->size . $this->stuffing;
    }

    /**
      * Дополнительная добавка, нужно реализовать кейс с одновременным добавлением.
     */
    public function _setTopping($topping)
    {
        if ($topping === 'mayo') {
            $this->topping = 'mayo';
        }
        if ($topping === 'spice') {
            $this->topping = 'spice';
        }
    }

    public function removeTopping()
    {
        if ($this->topping !== null) {
            unset ($this->topping);
        }
    }
}

$hamburger = new FastFood('small', 'cheese');
$hamburger->_setTopping('spice');
$hamburger->removeTopping();
var_dump($hamburger);
echo $hamburger->getHamburger();
