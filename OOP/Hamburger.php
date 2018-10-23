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
	public $smallSize; 
	public $bigSize;
	public $toppingMayo; 
	public $toppingSpice;
	public $stuffingCheese;
	public $stuffingSalad;
	public $stuffingPotato;

	public function __construct($size, $stuffing) 
	{
		$this->smallSize = $size;
		$this->stuffingPotato = $stuffing;

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
		// if (empty($this->toppingSpice) || empty($this->toppingMayo)) {
		// 	$result = 'Ингредиенты уже добавлены.';
		// }
		return $result;
		// $this->TOPPING_MAYO = $topping;
		// $this->TOPPING_SPICE = $topping;
	}

	public function removeTopping($someTopping) 
	{
		$result;
		if ($someTopping === 'mayo') {
			$result = $this->toppingMayo = null;
		}
		if ($someTopping === 'spice') {
			$result = $this->toppingSpice = null;
		}

		return $result;
	}

}

$hamburger = new Hamburger(50, 10);
$hamburger->addTopping('spice');
// $hamburger->addTopping('mayo');
$hamburger->removeTopping('spice');
var_dump($hamburger);
// var_dump($hamburger->addTopping('mayo'));
// var_dump($hamburger->addTopping('spice'));
