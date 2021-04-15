<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Sendemailctrl extends BaseController
{
	public function index()
	{
		return view('admin\email');
	}

	public function sendEmail()
    {
        $email=\Config\Services::email();

        $from=$this->request->getPost('from');
        $to=$this->request->getPost('to');
        $subject=$this->request->getPost('subject');
        $body=$this->request->getPost('body');
        $file=$this->request->getFile('photo');
        $filename=$file->getRandomName().'.'.$file->getClientExtension();
        //$file->move('../images',$filename);

       return  $file->getRealPath();
        $email->setFrom($from,'Nazir Ali');
        $email->setTo($to);
        $email->setSubject($subject);
        $email->setMessage($body);
        $email->attach('../images'.'/'.$filename);


        $bool= $email->send();

       return $bool.'';


    }
}
