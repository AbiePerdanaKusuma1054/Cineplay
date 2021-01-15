<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbJadwal extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_jadwal'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_sesi'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,

			],
			'id_ruang'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,

			],
			'tgl_mulai'          => [
				'type'           => 'DATE',
				'null'     		 => TRUE,
			],
			'tgl_berhenti'       => [
				'type'           => 'DATE',
				'null'     		 => TRUE,
			]
		]);
		$this->forge->addKey('id_jadwal', true);
		$this->forge->createTable('jadwal');
	}

	public function down()
	{
		$this->forge->dropTable('jadwal');
	}
}
