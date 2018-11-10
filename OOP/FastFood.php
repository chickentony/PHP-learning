<?php

/**
* Некая сеть фаст-фудов предлагает несколько видов гамбургеров:
*	маленький (50 рублей, 20 калорий);
*	большой (100 рублей, 40 калорий).
* Гамбургер может быть с одним из нескольких видов начинок (обязательно):
*	сыром (+ 10 рублей, + 20 калорий);
*	салатом (+ 20 рублей, + 5 калорий);
*	картофелем (+ 15 рублей, + 10 калорий).
* Дополнительно, гамбургер можно посыпать приправой (+ 15 рублей, 0 калорий) и полить майонезом (+ 20 рублей, + 5 калорий).
* Напишите программу, рассчитывающую стоимость и калорийность гамбургера
*/
class FastFood
{
    private $size;
    private $stuffing;
    private $topping = [];

    public function __construct($size, $stuffing)
    {
        if (is_string($size) && is_string($stuffing)) {
            $this->_setSize($size);
            $this->_setStuffing($stuffing);
        } else {
            echo hamburgerExeption();
        }
    }

    /**
      * Указываем размер.
     */
    private function _setSize($size)
    {
        if ($size === 'small') {
            $this->size = 'small';
        }
        if ($size === 'big') {
            $this->size = 'big';
        }
        if ($size !== 'small' && $size !== 'big') {
            echo hamburgerExeption();
        }
    }

    /**
      * Указываем начинку.
     */
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
        if ($stuffing !== 'cheese' && $stuffing !== 'salad' && $stuffing !== 'potato') {
            echo hamburgerExeption();
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
        if ($topping === 'both') {
            $this->topping[0] = 'spice';
            $this->topping[1] = 'mayo';    
        }
        if ($topping !== 'mayo' && $topping !== 'spice' && $topping !== 'both') {
            echo hamburgerExeption();
        }

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
        if (count($this->topping) < 2) {
            $this->topping[0] = null;
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
        if ($this->topping[0] === 'spice') {
            $result += 15;
        } elseif ($this->topping[0] === 'mayo') {
            $result += 20;
        } elseif (count($this->topping) > 1 && ($this->topping[0] !== null)) {
            $result += 35;
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
        if ($this->topping[0] === 'mayo') {
            $result += 5;
        }

        return $result;
    }
}

function hamburgerExeption() {
    return 'Параметр указан не верно.';
}

$hamburger = new FastFood('big', 'cheese');
$hamburger->_setTopping('mayo');

echo 'Цена получившегося гамбургера' . ' ' . $hamburger->calculatePrice();
echo "<br>";
echo 'Калорийность получившегося гамбургера' . ' ' . $hamburger->calculateCalories();
