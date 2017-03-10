<?php

abstract class Furniture
{
	private $height, $width, $length;

	public function __construct($h, $w, $l)
	{
		$this->height = $h;
		$this->width = $w;
		$this->length = $l;
	}

	public abstract function getPrice();
}

class BookShelf extends Furniture
{
	private $price;

	public function __construct($h, $w, $l, $p)
	{
		parent::__construct($h, $w, $l);
		$this->price = $p;
	}

	public function getPrice()
	{
		return $this->price;
	}
}

interface Storable
{
	public function getContentsAsText();
}

class Document implements Storable
{
	public function getContentsAsText()
	{
		return 'This is Text of the Document';
	}
}

class Indexer
{
	public function readAndIndex(Storable $s)
	{
		$textData = $s->getContentsAsText();
		echo $textData;
	}
}

$p = new Document();

$i = new Indexer();
$i->readAndIndex($p);