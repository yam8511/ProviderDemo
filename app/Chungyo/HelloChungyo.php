<?php

namespace App\Chungyo;

use App\Contract\iHello;

class HelloChungyo implements iHello
{
	public function hello()
	{
		return 'Hello Chungyo';
	}
}
