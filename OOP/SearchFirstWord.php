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
        }
        if ($size === 'big') {
            $this->bigSize = true;
        }
        if ($stuffing === 'cheese') {
            $this->stuffingCheese = true;
        }
        if ($stuffing === 'salad') {
            $this->stuffingSalad = true;
        }
        if ($stuffing === 'potato') {
            $this->stuffingPotato = true;
        }
        if ($size === null || $stuffing === null || $size === '' || $stuffing === '') {
            throw new Exception('Один или несколько параметров переданы не верно.');
        }
    }

    public function addTopping($topping)
    {
        if ($topping === 'mayo') {
            $this->toppingMayo = true;
        }
        if ($topping === 'spice') {
            $this->toppingSpice = true;
        }
    }

//    public function checkException()
//    {
//        try {
//            if (new FastFood(null, null));
//        } catch ()
//    }

}
try {
    $hamburger = new FastFood('small', 'potato');
} catch(Exception $e) {
    echo 'Message:' . $e->getMessage();
}
$hamburger->addTopping('spice');
var_dump($hamburger);
// var_dump($hamburger->addTopping('mayo'));
// var_dump($hamburger->addTopping('spice'));
