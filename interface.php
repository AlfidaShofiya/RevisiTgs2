<?php
// Interface
interface Model {
    public function Warna();
}
// interable
function getIterable():iterable {
  return ["Selamat ", "Datang"," Di"," Restoran", "Sanatoga"];
  
}
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
  
}
// class
class Menu {
    // Access modifiers Public
    // properti
  public $menu,
            $dessert,
            $harga;

  // contruktor
  function __construct ($menu, $dessert, $harga) {
    $this->menu = $menu;
    $this->dessert = $dessert;
    $this->harga = $harga;
  }
  // destructor
  function __destruct() {
    echo "Menu Makanan : Daftar : daftar {$this->menu} | Dessert : {$this->dessert} | Harga : {$this->harga}.";
    echo "<br>";
  }
  
}

// Inheritance
class Menu2 extends Menu implements Model{
    public  function Warna (){
        echo "<hr>Semua menu makanan disini tersedia";
        echo "<br>";
    }
}
// Static Property
class Terjual {
    public static $Seafood = 97, $Beef = 250, $Chicken = 350, $Oglio = 100, $Omelete = 400;
}
// Static Methods
class Stok{
    public static function staticMethod (){
        echo "Seafood <br> Beef <br> Chicken <br> Omelete <br> Lotus";
        echo "<hr>";
    }
}

// objek
$menu1 = new Menu2("Bite Fish, Salty Egg, Meet and Mash, Nachos", "Sering Terjual", 240000);
$menu2 = new Menu2("Chicken", "Sering Terjual", 68000);
$menu2 -> Warna();
Stok::staticMethod();
echo "<br> Untuk Menu Beef Terjual : " . Terjual::$Beef;
echo "<br> Untuk Menu Chicken Terjual : " . Terjual::$Chicken;
echo "<br> Untuk Menu Seafood Terjual : " . Terjual::$Seafood;
echo "<br> Untuk Menu Oglio Terjual : " . Terjual::$Oglio;
echo "<br> Untuk Menu Omelete Terjual : " . Terjual::$Omelete;
echo "<hr>";