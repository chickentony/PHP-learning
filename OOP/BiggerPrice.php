<?php
/**
  * Дана таблица всех доступных продуктов на складе. Данные представленны в виде массива объектов (array of objects)
  * Ваша миссия тут - это найти ТОП самых дорогих товаров. Количество товаров, которые мы ищем, будет переданно в первом аргументе, а сами данные по товарам будут переданны вторым аргументом.
 */

class BiggerPrice
{
    public $name;
    public $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$product = new BiggerPrice('bread', 100);
$secondProduct = new BiggerPrice('wine', 138);
$thirdProduct = new BiggerPrice('meat', 15);

function getBiggerPrice($limit, $data) {

    function compare($a, $b) {

        if ($a->price < $b->price) {
            return 1;
        }
        if ($a->price > $b->price) {
            return -1;
        }
        return 0;
    }
    
    usort($data, 'compare');
    return array_slice($data, 0, $limit);
    
}

print_r(getBiggerPrice(1, [$product, $secondProduct, $thirdProduct]));
