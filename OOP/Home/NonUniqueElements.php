<?php
/**
 * Дан непустой массив целых чисел (X). В этой задаче вам нужно вернуть массив, состоящий только из неуникальных элементов данного массива. 
 * Для этого необходимо удалить все уникальные элементы (которые присутствуют в данном массиве только один раз). 
 * Для решения этой задачи не меняйте оригинальный порядок элементов. 
 * Пример: [1, 2, 3, 1, 3], где 1 и 3 неуникальные элементы и результат будет [1, 3, 1, 3].
 */

class NonUniqueElements {

	private $countedArray;

	private function countArray($array) 
	{
		return $this->countedArray = array_count_values($array);
	}

	private function checkIsArrayUnique($array) 
	{
		$this->countArray($array);
		// $countArray = array_count_values($array);
		foreach ($this->countedArray as $key => $value) {
			if ($value < 2) {
				return true;
			} else {
				return false;
			}
		}

	}

	public function getNonUniqueElements($array) 
	{
		if (!$this->checkIsArrayUnique($array)) {
			$this->countArray($array);
			// $count = array_count_values($array);
			for ($i = 0; $i < count($array); $i++) {
				foreach ($this->countedArray as $key => $value) {
					if ($array[$i] === $key && $value == 1) {
						unset($array[$i]);
						break;	
					}
				}
			}
			return $array;
		} else {
			return [];
		}
	}	
}

$value = new NonUniqueElements();
print_r($value->getNonUniqueElements([5, 5, 5, 5, 5])); 
