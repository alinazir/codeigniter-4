<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestModel;

class Modelctrl extends BaseController
{
	public function index()
	{
	    $test=new TestModel();
		return $this->response->setJson($test->findAll());
	}

    public function getPerson($id)
    {
        $test=new TestModel();
        return $this->response->setJson($test->findAll(2,1));
    }

    public function savePerson()
    {
        $data=[
                'name'=>$this->request->getPost('name'),
                'gender'=>$this->request->getPost('gender'),
                'city'=>$this->request->getPost('city'),
            ];

        $model=new TestModel();
        try{
            if($model->save($data)===false)
            {
                return $this->response->setJSON(['errors'=>$model->errors()]);
            }else{
                return $this->response->setJSON(['msg'=>'Successfully Added']);

            }
        }catch (\Exception $exception)
        {
            return $this->response->setJSON(['exception'=>$exception->getMessage()]);

        }

    }
}
