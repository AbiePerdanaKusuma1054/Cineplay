<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbMember extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_member'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 30,
			],
			'email'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 30,
			],
			'password'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 35,
			],
			'jk' => [
				'type'           => 'VARCHAR',
				'constraint'     => 10,
			],
			'tgl_lahir' => [
				'type'          => 'DATE',
				'null'        	=> TRUE,
			],
			'foto' => [
				'type'          => 'VARCHAR',
				'constraint'    => 255,
			]
		]);
		$this->forge->addKey('id_member', true);
		$this->forge->createTable('member');
	}

	public function down()
	{
		$this->forge->dropTable('member');
	}
}
