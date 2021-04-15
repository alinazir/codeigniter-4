<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Useragentctlr extends BaseController
{
	public function index()
	{
		$agent=$this->request->getUserAgent();
		return $agent->getVersion();
	}
}
