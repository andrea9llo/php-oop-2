<?php

  class Person {

    public $name;
    public $lastname;

    public function __construct($name, $lastname){
      $this-> name = $name;
      $this-> lastname = $lastname;
    }

    public function __toString(){
      return  $this-> name ." ".
              $this-> lastname;
    }

  }
  $person = new Person(Andrea, Novello);

  class Guest extends Person{

    public $year_birth;

    public function __construct($name, $lastname, $year_birth){
      parent::__construct($name, $lastname);
      $this-> year_birth = $year_birth;
    }

    public function __toString(){
      return parent::__toString() . " " . $this-> year_birth;
    }
  }
  $guest = new Guest(Andrea, Novello, 1993);
  class Payng extends Person{

    public $address;

    public function __construct($name, $lastname, $address){
      parent::__construct($name, $lastname);
      $this-> address = $address;
    }

    public function __toString(){
      return parent::__toString() . " " . $this-> address;
    }

  }

  $payng = new Payng(andrea, novello, viale aldo moro);
  echo $payng;
