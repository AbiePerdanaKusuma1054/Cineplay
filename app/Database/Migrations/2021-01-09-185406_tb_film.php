<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TbFilm extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_film'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 40,
			],
			'genre'       		=> [
				'type'           => 'VARCHAR',
				'constraint'     => 40,
			],
			'rating'        => [
				'type'           => 'VARCHAR',
				'constraint'     => 5,
			],
			'durasi'        => [
				'type'           => 'TIME',
				'null'     		 => TRUE,
			],
			'id_jadwal'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
			],
			'sinopsis'        	 => [
				'type'           => 'TEXT',
				'null'     		 => TRUE,
			],
			'score'        	 => [
				'type'           => 'INT',
				'constraint'     => 11,
			],
			'rilis'        	 => [
				'type'           => 'YEAR',
				'constraint'     => 4,
			],
			'gambar'        	 => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
		]);
		$this->forge->addKey('id_film', true);
		$this->forge->createTable('film');
	}

	public function down()
	{
		$this->forge->dropTable('film');
	}
}
