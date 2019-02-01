<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class IndexController
{
	public function indexAction()
	{
		return mt_rand(1, 100);
	}

	public function homeAction(Request $request, $name)
	{
		var_dump($request->getMethod());
		// exit;
		return 'home page '.$name;
	}
}