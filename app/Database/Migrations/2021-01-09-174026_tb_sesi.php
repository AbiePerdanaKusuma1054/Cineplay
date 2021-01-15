<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbSesi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_sesi'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_jadwal'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'sesi'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 11,
			],
			'mulai' => [
				'type'           => 'TIME',
				'null'     => TRUE,
			],
			'selesai' => [
				'type'          => 'TIME',
				'null'     		=> TRUE
			],
		]);
		$this->forge->addKey('id_sesi', true);
		$this->forge->createTable('sesi');
	}

	public function down()
	{
		$this->forge->dropTable('sesi');
	}
}
