<?php
/*
class Text{
    //contstructor => __construct();

    public function __construct(){
        echo "Contstructor"."<br>";
    }
    public function show(){
        echo "Hellow world";
    }

    public function greeting() {
        echo "good evening";
    }
    //destructor => __destruct()
    public function __destruct(){
        echo "Destructor"."<br>";
    }
}



$objectText = new Text();
$objectText -> show();
echo "<br>";
$objectText -> greeting(); 
echo  "<br>";

*/

class Parents{
    public function flat(){
        echo "2BHK flat <br>";
    }

    public function car(){
        echo "Allion <br>";
    }
    //access => public => the property or method can be accessed from everywher. this default
    //  protected => the property or method can be accessed within the class and by classes derived from the class 
    // privete=> the property or method can be accessed within the class.
    protected function bankAccount() {
      echo "Account Details: 2050100191000";
    }
    private function AccessAccount(){
      $this-> bankAccount();
    }
}
// relation parents and child => extends Parents
class Child extends Parents {

    //parents bankaccount access
    // private function accessParentAccount(){
    //     $this->bankAccount();
    // }
    public function accessParentAccount(){
        $this->bankAccount();
    }
    public function bike(){
        echo "Royel enfild <br>";
    }
}


$objectChild = new Child();
$objectChild -> flat();
$objectChild -> car();
$objectChild -> accessParentAccount();


?>