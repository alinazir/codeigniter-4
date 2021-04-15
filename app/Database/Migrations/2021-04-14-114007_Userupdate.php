<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Userupdate extends Migration
{
	public function up()
	{
        $fields = [
            'comment' => ['type' => 'VARCHAR','null'=>'true']
        ];
		$this->forge->addColumn('user',$fields);
	}

	public function down()
	{
		//
	}
}
