<?php
/**
 * Created by PhpStorm.
 * User: sudarshanmahesh
 * Date: 2019-02-05
 * Time: 12:38
 */

class Product {
	public $name;
	public $price;

	public function __construct($name, $price) {
		$this->name = $name;
		$this->price = $price;
	}
}

class Customer {
	public $name;
	public $age;
	public $customer_number;

	public function __construct($name, $age, $customer_number) {
		$this->name = $name;
		$this->age = $age;
		$this->customer_number = $customer_number;
	}
}

$product1 = new Product('MacBook', 2500);


var_dump($product1);