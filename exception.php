<?php

class CustomerException extends Exception
{
	public function __construct($message = null, $code = 0)
	{
		$t_message = 'Exception raised in CustomerException ';
		$t_message .= 'with message :' . $message;

		parent::__construct($t_message, $code);
	}
}

function testException()
{
	throw new CustomerException('CustomerException has been raised', 101);
}

try
{
	testException();
}
catch(CustomerException $e)
{
	echo 'Error Message :' . $e->getMessage();
	echo 'Error Code :' . $e->getCode();
}