<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sessionctrl extends BaseController
{
	public function setSession()
	{
	    // 1st method
		//$session=\Config\Services::session();

        // 2ND METHOD
		$session=session();

		if ($session->has('val'))
        {
            echo 'session is already set';
        }else{
            $session->set('val','nazir ali');
            echo 'new session is set now!';
        }

	}

    public function getSession()
    {

        $session=session();

        if ($session->has('val'))
        {
            echo $session->get('val');
        }else{
            echo 'no session is exist!';
        }

    }

    public function destorySession()
    {

        $session=session();

        if ($session->has('val'))
        {
            echo $session->remove('val');
        }else{
            echo 'no session is exist!';
        }

    }


}
