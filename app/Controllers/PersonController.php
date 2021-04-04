<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PersonController extends BaseController
{
	public function add()
	{
		return view('admin/add-person');
	}

	public function personsList()
    {
         return view('admin/persons-list');
    }



    public function profile($id)
    {
        return view('admin/person-profile');
    }

    public function person($name,$city,$age)
    {
        return 'welcome '.$name.' '.$city.' '.$age;
    }


}
