<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbRuang extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_ruang'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 256,
			],
			'jml_kursi'        => [
				'type'           => 'INT',
				'constraint'     => 11,
			]
		]);
		$this->forge->addKey('id_ruang', true);
		$this->forge->createTable('ruang');
	}

	public function down()
	{
		$this->forge->dropTable('ruang');
	}
}
