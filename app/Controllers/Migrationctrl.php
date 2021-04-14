<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Migrationctrl extends BaseController
{
	public function index()
	{
		$model=new UserModel();
		return $this->response->setJSON(UserModel::getAll());
	}

    public function saveUser()
    {
        $data=[
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
        ];

        $model=new UserModel();
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
