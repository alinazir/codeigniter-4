<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
		     'id'=>[
		         'type'=>'INT',
                 'constraint'=>5,
                 'unsigned'=>true,
                 'auto_increment' => true,
                 ],
            'name'=>[
                'type'=>'VARCHAR',
                'constraint' => '100',
                'null'=>true,
            ],
            'email'=>[
                'type'=>'VARCHAR',
                'constraint' => '100',
                'null'=>true,
            ]
        ]);


		$this->forge->addPrimaryKey('id',true);
		$this->forge->createTable('user');
	}

	public function down()
	{

		$this->forge->dropTable('user');
	}
}
