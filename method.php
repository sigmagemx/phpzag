<?php

class Customer
{
	private $name;

	public function setName($name)
	{
		if (trim($name) != '') {
			$this->name = $name;
			return true;
		} else {
			return false;
		}
	}

	public function getName()
	{
		return $this->name;
	}
}

$c1 = new Customer();
$c1->setName('Stuart Broad');
echo $c1->getName();