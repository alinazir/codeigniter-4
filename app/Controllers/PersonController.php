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


   public function getUserData()
   {
//      $name=  $this->request->getVar('name');
//      $city=  $this->request->getVar('city');

       $name=$this->request->getPost('name');
       $email=$this->request->getPost('email');
       $city=$this->request->getPost('city');
       $country=$this->request->getPost('country');
       $gender=$this->request->getPost('gender');
       $address=$this->request->getPost('address');
       $date=$this->request->getPost('date');



      echo 'conutry name '.$country;
   }




}
