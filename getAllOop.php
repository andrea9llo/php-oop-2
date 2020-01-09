<?php

  class Person {

    public $name;
    public $lastname;

    public function __construct($name, $lastname){
      $this-> name = $name;
      $this-> lastname = $lastname;
    }

    public function __toString(){
      return "Name: ". $this-> name ."; Lastname: ".
             $this-> lastname;
    }

  }
  $person = new Person("Andrea", "Novello");

  class Guest extends Person{

    public $year_birth;

    public function __construct($name, $lastname, $year_birth){
      parent::__construct($name, $lastname);
      $this-> year_birth = $year_birth;
    }

    public function __toString(){
      return parent::__toString() . ", year of birth: " . $this-> year_birth;
    }
  }
  $guest = new Guest("Andrea", "Novello", 1993);
  class Payng extends Person{

    public $address;

    public function __construct($name, $lastname, $address){
      parent::__construct($name, $lastname);
      $this-> address = $address;
    }

    public function __toString(){
      return parent::__toString() . "; Address: " . $this-> address;
    }

  }

  $payng = new Payng("Andrea", "Novello", "viale aldo moro 64");


  echo "Person <br>".$person."<br>";
  echo "---------<br>";
  echo "Guest <br>".$guest ."<br>";
  echo "---------<br>";
  echo "Payng <br>".$payng;
