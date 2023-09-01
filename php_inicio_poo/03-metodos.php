<? include 'includes/header.php';

class MenuRestaurant { 
    public $nombre = 'Nombre del producto';
    public $precio = 0;
    public function ObtenerProductosyNombre(){ //funcion
        echo "El producto " . $this->nombre . " tiene un precio de " . $this->precio;
    }
}; 

$bebida = new MenuRestaurant();
$bebida-> nombre = "jugo de fresa";
$bebida-> precio = 50;
$bebida-> ObtenerProductosyNombre(); //como llamar a la funcion 

"<br></br>";

$postre = new MenuRestaurant();
$postre-> nombre = " Torta de manzana ";
$postre-> precio = 150;
$postre-> ObtenerProductosyNombre(); //como llamar a la funcion

"<br></br>";