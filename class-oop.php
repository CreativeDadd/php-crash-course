<?php  
// creating a class:
class Car{
    // create the properties:
    public $name;
    public $color;
    public $model;
    public $year;
    //lets create the code for instanciating objects:
    public function __construct($name, $model, $color, $year){
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
        $this->year = $year;

    }
 function carsModels(){
    return "This is a {$this->name} {$this->model} {$this->color} {$this->year}";
 }

}

//lest instanciate an objesct now:
 $car_1 = new Car ("Ford", "Explorer", "Blue", "2024");
 echo $car_1->model."<br>";
 echo $car_1->carsModels();

 echo "<br>";
 echo '<br>';


 //inheritance in oop:

 class NiceCar extends Car{
    public $bat_range;
    public function __construct($name, $model, $color, $year, $bat_range){
        parent::__construct($name, $model, $color, $year);
        $this->bat_range = $bat_range;
    }

    function carsModels(){
        return parent::carsModels() . "and it battery can cover {$this->bat_range}km";
    }
 }

 // instanciate the obj.:
 $newCarsModel = new NiceCar('Tesla', 'X', ' Metal-Black ', 2024, 500);

 echo $newCarsModel->carsModels();


