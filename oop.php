 <?php
 /**------Object Oriented Programming in php */

 /*
    from phps onwards you can write php in either a procedural or object oriented way.OOP consists of classes that can hold properties and methods. Objects can be created from classes. 
 */

 class User {
    public $name;
    public $email;
    public $password;


 // constructor in class:

   public function __construct( $name, $email, $password ){
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
   }

   function set_name ($name){
      return $this->name;
   }

   function get_name(){
      return $this->name;
   }
 }

 $user_1 = new User( 'Bola', 'eromo@haya.com', 'gar44');
 $user_2 = new User( 'Erkee', 'erkere@haya.com', 'grtrr44');
 echo $user_1->email;
 echo $user_2->password;
 echo $user_2->set_name("Adeola");


 // inheritance:
 class Employee extends User{
   public $title;
   public function __construct($name, $email, $password, $title){
      parent::__construct($name, $email, $password, );
      $this->title=$title;
   }
 }

 $employee1 = new Employee('Rode', 'alenrode@hayamail.com', '687ytu', 'Admin');
  echo <<<EOT
   Mr. $employee1->name is the $employee1->title; and his email is $employee1->email.
  EOT;