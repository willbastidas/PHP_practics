<? include 'includes/header.php';

class MenuRestaurant { //clase vacia debe crear el nombre la clase cn mayusculas la primera letra eb este caso MenuRestaurant
    public $nombre = 'Nombre del producto';
    public $precio = 0;

}; 

$bebida = new MenuRestaurant();
$bebida-> nombre = 'jugo de fresa'; //sobre escribir los datos de bebida
$bebida-> precio = 15; //sobre escribir los datos de bebida 

"<br></br>";
echo $bebida -> nombre; // como mostrar el valor de dicha propiedad (las propiedades son como las variable)
"<br></br>";
var_dump($bebida);
"<br></br>";


$postre = new MenuRestaurant();
$postre-> nombre = 'pollo a la plancha'; //sobre escribir los datos de postre
$postre-> precio = 15; //sobre escribir los datos de postre




var_dump($postre);