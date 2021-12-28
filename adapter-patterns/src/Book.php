<?php

namespace Acme;


class Book 
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