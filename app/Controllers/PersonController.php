<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Person;
use App\Models\PersonModel;
use CodeIgniter\Controller;

class PersonController extends BaseController
{
	public function add()
	{
		return view('admin/add-person');
	}

	public function personsList()
    {
         $persons=new PersonModel();
         return view('admin/persons-list',['persons'=>$persons->getPersons()]);
    }

    public function profile($id)
    {
        $person=new PersonModel();

      // print_r(['person'=>$person->personById($id)->getResult()]);
       return view('admin/person-profile',['person'=>$person->personById($id)->getResult()]);
    }

    public function edit($id)
    {
        $person=new PersonModel();

        // print_r(['person'=>$person->personById($id)->getResult()]);
        return view('admin/edit',['person'=>$person->personById($id)->getResult()]);
    }


   public function getUserData()
   {
//      $name=  $this->request->getVar('name');
//      $city=  $this->request->getVar('city');

        // helper(['form', 'url']);

        $validation = \Config\Services::validation();
        $valid = $this->validate([
           'name' => 'required',
           'country' => 'required'
       ]);
       if (!$valid) {

          // return view('admin/add-person',['validation'=>$this->validator]);
          // return redirect()->route('addPerson')->with('validation',$this->validator);
       } else {

           $name = $this->request->getPost('name');
           $email = $this->request->getPost('email');
           $city = $this->request->getPost('city');
           $country = $this->request->getPost('country');
           $gender = $this->request->getPost('gender');
           $address = $this->request->getPost('address');
           $phone = $this->request->getPost('phone');

           $date = $this->request->getPost('date');

           $data=[
                     'name'=>$name,
                     'email'=>$email,
                     'phone'=>$phone,
                     'dob'=>$date,
                     'city'=>$city,
                     'country'=>$country,
                     'gender'=>$gender,
                     'address'=>$address
                ];
             $person=new PersonModel();
             if ($person->savePerson($data))
             {
                 return redirect('addPerson')->with('success','added success fully');
             }
           echo $person->savePerson($data);
       }

   }


    public function updatePerson()
    {
        $file=$this->request->getFile('photo');
       $file->move('../images/',$file->getRandomName());
        return base_url('public/imgs/');
//      $name=  $this->request->getVar('name');
//      $city=  $this->request->getVar('city');

        // helper(['form', 'url']);


        $validation = \Config\Services::validation();
        $valid = $this->validate([
            'name' => 'required',
            'country' => 'required'
        ]);
        if (!$valid) {

            // return view('admin/add-person',['validation'=>$this->validator]);
            // return redirect()->route('addPerson')->with('validation',$this->validator);
        } else {

            $name = $this->request->getPost('name');
            $email = $this->request->getPost('email');
            $city = $this->request->getPost('city');
            $country = $this->request->getPost('country');
            $gender = $this->request->getPost('gender');
            $address = $this->request->getPost('address');
            $phone = $this->request->getPost('phone');

            $date = $this->request->getPost('date');

            $data=[
                'name'=>$name,
                'email'=>$email,
                'phone'=>$phone,
                'dob'=>$date,
                'city'=>$city,
                'country'=>$country,
                'gender'=>$gender,
                'address'=>$address
            ];
            $person=new PersonModel();
            if ($person->updatePerson($this->request->getPost('id'),$data))
            {
                return redirect('personList')->with('success','updated success fully');
            }else{
                return "not updated";
            }
        }

    }



}
