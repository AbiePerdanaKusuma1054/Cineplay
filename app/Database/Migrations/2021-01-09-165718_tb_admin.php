<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbAdmin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_admin'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => 40,
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => 40,
			],
			'foto' => [
				'type'           => 'VARCHAR',
				'constraint'     => 256,
			],
			'level' => [
				'type'           => 'VARCHAR',
				'constraint'     => 10,
			],
			'created_at' => [
				'type'          => 'DATETIME',
				'null'     		=> TRUE,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'     		=> TRUE,
			]
		]);
		$this->forge->addKey('id_admin', true);
		$this->forge->createTable('admin');
	}

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}
