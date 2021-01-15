<?php

namespace App\Models;

use CodeIgniter\Model;

class MovieModel extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'id_film';
    protected $allowedFields = ['judul', 'slug', 'genre', 'durasi', 'sinopsis', 'rilis', 'gambar', 'rating'];

    public function getFilm($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
    public function pesanFilm($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
