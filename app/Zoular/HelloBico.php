<?php

namespace App\Zoular;

use App\Zoular\iHello;

class HelloBico implements iHello
{
	public function hello()
	{
		return 'Hello Bico';
	}
}