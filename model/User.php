<?php
namespace Model;

class User
{
  public $id;
  public $name;
  public $email;
  public $address;
  public $numberphone;
  public function __construct($name, $email, $address,$numberphone)
  {
      $this->name = $name;
      $this->email = $email;
      $this->address = $address;
      $this->numberphone= $numberphone;
  }
}