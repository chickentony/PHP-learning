<?php

/*
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
	public $smallSize; 
	public $bigSize;
	public $toppingMayo; 
	public $toppingSpice;
	public $stuffingCheese;
	public $stuffingSalad;
	public $stuffingPotato;

	public function __construct($size, $stuffing) 
	{
		if ($size === 'small') {
			$this->smallSize = true;
			// self::SMALL_SIZE = true;
		} elseif ($size === 'big') {
			$this->bigSize = true;
		} elseif ($stuffing === 'cheese') {
			$this->stuffingCheese = true;
		} elseif ($stuffing === 'salad') {
			$this->stuffingSalad = true;
		} elseif ($stuffing === 'potato') {
			$this->stuffingPotato = true;
		} else {
			throw new Exception('Один из параметров указан ен верно.');
		}	
	}

	// public function addTopping($topping)
	// {
	// 	$result;
	// 	if ($topping === 'mayo') {
	// 		$result = $this->toppingMayo = 20;
	// 	}
	// 	if ($topping === 'spice') {
	// 		$result = $this->toppingSpice = 15;
	// 	}
	// 	// if (empty($this->toppingSpice) || empty($this->toppingMayo)) {
	// 	// 	$result = 'Ингредиенты уже добавлены.';
	// 	// }
	// 	return $result;
	// 	// $this->TOPPING_MAYO = $topping;
	// 	// $this->TOPPING_SPICE = $topping;
	// }
	// public function removeTopping($someTopping) 
	// {
	// 	$result;
	// 	if ($someTopping === 'mayo') {
	// 		$result = $this->toppingMayo = null;
	// 	}
	// 	if ($someTopping === 'spice') {
	// 		$result = $this->toppingSpice = null;
	// 	}
	// 	return $result;
	// }
}

try {
	$hamburger = new FastFood(1, 2);
} catch(Exception $e) {
	echo 'Message:' . $e->getMessage();
} 

$hamburger = new FastFood('s', 'cheese');
var_dump($hamburger);
// var_dump($hamburger->addTopping('mayo'));
// var_dump($hamburger->addTopping('spice'));
