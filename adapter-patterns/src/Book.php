<?php

namespace Acme;

use Acme\BookInterface;

class Book implements BookInterface
{
	
	public function open()
	{
		var_dump('opening the paper book');
	}

	public function turnPage()
	{
		var_dump('turninig the page of the paper book');
	}
}