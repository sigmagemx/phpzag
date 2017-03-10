<?php

class Customer
{
	private $first_name;
	private $last_name;
	private $outstanding_amount;

	public function __construct($first_name, $last_name, $outstanding_amount)
	{
		$this->first_name = $first_name;
		$this->last_name = $last_name;
		$this->outstanding_amount = $outstanding_amount;
	}

	public function printData()
	{
		echo 'Name :' . $this->first_name . ' ' . $this->last_name . "\n";
		echo 'Outstanding Amount :' . $this->outstanding_amount . "\n";
	}
}

class Order
{
	private $order_id;
	private $customer;

	public function __construct($order_id, $customer)
	{
		$this->order_id = $order_id;
		$this->customer = $customer;
	}

	public function __destruct()
	{
		unset($this->order_id);
		unset($this->customer);
	}
}

$order_id = 'P0001';
$c1 = new Customer('Stuart', 'Broad', 0);
$o = new Order($order_id, $c1);