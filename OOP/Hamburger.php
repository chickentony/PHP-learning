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

class Hamburger
{
// 	const SMALL_SIZE = 50;
// 	const BIG_SIZE = 100;
// 	const STUFFING_CHEESE = 15;
// 	// const STUFFING_SALAD;
// 	// const STUFFING_POTATO;
// 	const TOPPING_MAYO = 20;
// 	const TOPPING_SPICE = 15;
	public $smallSize, $bigSize;
	public $toppingMayo, $toppingSpice;

	function __construct($size, $stuffing) 
	{
		$this->smallSize = $size;
		$this->STUFFING_CHEESE = $stuffing;

	}

	public function addTopping($topping)
	{
		$result;
		if ($topping === 'mayo') {
			$result = $this->toppingMayo = 20;
		}
		if ($topping === 'spice') {
			$result = $this->toppingSpice = 15;
		}
		return $result;
		// $this->TOPPING_MAYO = $topping;
		// $this->TOPPING_SPICE = $topping;
	}

}

$hamburger = new Hamburger(50, 10);
$hamburger->addTopping('mayo');
var_dump($hamburger);
// var_dump($hamburger->addTopping('mayo'));
// var_dump($hamburger->addTopping('spice'));
