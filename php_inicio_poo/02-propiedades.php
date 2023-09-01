<? include 'includes/header.php';

class MenuRestaurant { //clase vacia debe crear el nombre la clase cn mayusculas la primera letra eb este caso MenuRestaurant
    public $nombre = 'Nombre del producto';
    public $precio = 0;

}; 

$bebida = new MenuRestaurant();
$bebida-> nombre = 'jugo de fresa';
$bebida-> precio = 15 + '$';
$postre = new MenuRestaurant();




var_dump($bebida);
var_dump($postre);