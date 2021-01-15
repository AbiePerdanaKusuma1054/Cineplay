<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbTiket extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_tiket'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'harga'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'stok'       		=> [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'id_film'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			]
		]);
		$this->forge->addKey('id_tiket', true);
		$this->forge->createTable('tiket');
	}

	public function down()
	{
		$this->forge->dropTable('tiket');
	}
}
