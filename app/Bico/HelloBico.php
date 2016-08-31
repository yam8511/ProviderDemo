<?php

namespace App\Bico;

use App\Contract\iHello;

class HelloBico implements iHello
{
	public function hello()
	{
		return 'Hello Bico';
	}
}