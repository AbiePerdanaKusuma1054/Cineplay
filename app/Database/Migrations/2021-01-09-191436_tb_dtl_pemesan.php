<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbDtlPemesan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_dtl_pemesan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'kursi'       		=> [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'id_tiket'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'id_pemesan'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			]

		]);
		$this->forge->addKey('id_dtl_pemesan', true);
		$this->forge->createTable('dtl_pemesan');
	}

	public function down()
	{
		$this->forge->dropTable('dtl_pemesan');
	}
}
