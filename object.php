<?php

class Customer
{
	private $first_name, $last_name;
	private $outstanding_amount = 0;


	public function getData($first_name, $last_name)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
	}

	public function printData()
	{
		echo $this->first_name . ':' . $this->last_name;
	}
}

class Order
{
	private $order_id;
	private $customer;

	public function setCust(Customer $c)
	{
		$this->customer = $c;
	}
}

$c1 = new Customer();
$c2 = new Customer();

$o1 = new Order();
$o1->setCust($c1);

class Student {
	public $first_name;
	public $last_name;
	public $date_of_birth;
	public $address;
	public $telephone;
}

$s1 = new Student();
$s1->first_name = 'Steve';
$s1->last_name = 'Broad';
$s1->date_of_birth = '01/01/1920';
$s1->address = 'USA';
$s1->telephone = '111111111';

$s2 = new Student();
$s2->first_name = 'Stuart';
$s2->last_name = 'Broad';
$s2->date_of_birth = '01/01/1930';
$s2->address = 'USA';
$s2->telephone = '99999999';