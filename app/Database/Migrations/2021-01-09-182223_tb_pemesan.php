<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbPemesan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_pemesan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'id_member'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'jml_tiket_pesan'       		=> [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'total_harga'        => [
				'type'           => 'VARCHAR',
				'constraint'     => 100,
			],
			'tgl_pesan' => [
				'type'           => 'DATE',
				'null'     => TRUE,
			],
			'tgl_lahir' => [
				'type'          => 'DATE',
				'null'     => TRUE,
			],
			'status' => [
				'type'          => 'INT',
				'constraint'    => 11,
			]
		]);
		$this->forge->addKey('id_pemesan', true);
		$this->forge->createTable('pemesan');
	}

	public function down()
	{
		$this->forge->dropTable('pemesan');
	}
}
