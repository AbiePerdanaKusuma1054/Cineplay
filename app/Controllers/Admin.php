<?php

namespace App\Controllers;

use App\Models\MovieModel;

class Admin extends BaseController
{

    protected $movieModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin | Cineplay',

        ];

        echo view('admin/index', $data);
    }
    public function movie()
    {
        $film = $this->movieModel->findAll();
        $data = [
            'title' => 'Dashboard | Cineplay',
            'film' => $film

        ];

        echo view('/admin/movie', $data);
    }
    public function create()
    {
        // session();
        $data = [
            'title' => 'Form Tambah film',
            'validation' => \Config\Services::validation()
        ];
        return view('admin/create', $data);
    }
    public function save()
    {
        if (!$this->validate([
            'judul' => 'required|is_unique[film.judul]',
            'genre' => 'required',
            'durasi' => 'required',
            'sinopsis' => 'required',
            'rilis' => 'required',
            'rating' => 'required',

        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/create')->withInput()->with('validation', $validation);
        }
        $fileSampul = $this->request->getFile('gambar');
        $fileSampul->move('img');
        $namaSampul = $fileSampul->getName();

        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->movieModel->save([

            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'genre' => $this->request->getVar('genre'),
            'durasi' => $this->request->getVar('durasi'),
            'sinopsis' => $this->request->getVar('sinopsis'),
            'rilis' => $this->request->getVar('rilis'),
            'rating' => $this->request->getVar('rating'),
            'gambar' => $namaSampul

        ]);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/admin/movie');
    }
    public function delete($id_film)
    {
        $this->movieModel->delete($id_film);
        session()->setFlashdata('pesan', 'Data berhasil dihapus');
        return redirect()->to('/admin/movie');
    }
    public function edit($slug)
    {
        $data = [
            'title' => 'Form Edit Film',
            'validation' => \Config\Services::validation(),
            'film' => $this->movieModel->getFilm($slug)
        ];
        return view('admin/edit', $data);
    }
    public function update($id_film)
    {
        $filmlama = $this->movieModel->getFilm($this->request->getVar('slug'));
        if ($filmlama['judul'] == $this->request->getVar('judul')) {
            $rule_judul = 'required';
        } else {
            $rule_judul = 'required|is_unique[film.judul]';
        }
        if (!$this->validate([
            'judul' => $rule_judul,
            'genre' => 'required',
            'durasi' => 'required',
            'sinopsis' => 'required',
            'rilis' => 'required',
            'rating' => 'required',


        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/edit/' . $this->request->getVar('slug'))->withInput()->with('validation', $validation);
        }

        $fileSampul = $this->request->getFile('gambar');
        if ($fileSampul->getError() == 4) {
            $namaSampul = $this->request->getVar('sampulLama');
        } else {
            $namaSampul = $fileSampul->getName();
            $fileSampul->move('img', $namaSampul);
            unlink('img/' . $this->request->getVar('sampulLama'));
        }


        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->movieModel->save([
            'id' => $id_film,
            'judul' => $this->request->getVar('judul'),
            'slug' => $slug,
            'genre' => $this->request->getVar('genre'),
            'durasi' => $this->request->getVar('durasi'),
            'sinopsis' => $this->request->getVar('sinopsis'),
            'rilis' => $this->request->getVar('rilis'),
            'rating' => $this->request->getVar('rating'),
            'gambar' => $namaSampul

        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/admin/movie');
    }




    //--------------------------------------------------------------------

}
