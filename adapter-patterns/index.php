<?php

require 'vendor/autoload.php';

use Acme\Book;
use Acme\Kindle;
use Acme\BookInterface;
use Acme\KindleAdapter;

class Person 
{
	public function read(BookInterface $book)
	{
		$book->open();
		$book->turnPage();
	}
}

// Use adapter to call the same methods
(new Person)->read(new KindleAdapter(new Kindle));

//(new Person)->read(new Book);
