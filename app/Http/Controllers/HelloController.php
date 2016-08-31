<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contract\iHello;

class HelloController extends Controller
{
    protected $whoSay;

    public function __construct(iHello $who)
    {
    	$this->whoSay = $who;
    }

    public function index()
    {
    	$data = ['sayWhat' => $this->whoSay->hello()];
    	return view('hello', $data);
    }
}
