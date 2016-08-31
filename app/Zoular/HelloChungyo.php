<?php

namespace App\Zoular;

use App\Zoular\iHello;

class HelloChungyo implements iHello
{
	public function hello()
	{
		return 'Hello Chungyo';
	}
}