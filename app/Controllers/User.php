<?php

namespace App\Controllers;

use App\Models\MovieModel;
use App\Models\MemberModel;
use App\Models\BookModel;

class User extends BaseController
{
    protected $memberModel;
    protected $movieModel;
    protected $bookModel;
    public function __construct()
    {
        $this->movieModel = new MovieModel();
        $this->memberModel = new MemberModel();
        $this->bookModel = new BookModel();
    }
    public function dashboard()
    {
        $session = session();
        $film = $this->movieModel->findAll();
        $data = [
            'title' => 'Dashboard | Cineplay',
            'film' => $film

        ];

        echo view('/user/dashboard', $data);
    }
    public function detail($slug)
    {
        $session = session();
        $data = [
            'title' => 'Detail Film | Cineplay',
            'film' => $this->movieModel->getFilm($slug)

        ];


        return view('user/detail', $data);
    }
    public function pesan($slug)
    {
        $session = session();
        $data = [
            'title' => 'Detail Film | Cineplay',
            'film' => $this->movieModel->pesanFilm($slug)

        ];


        return view('user/pesan', $data);
    }

    public function tiket()
    {
        $user = $this->bookModel->findAll();
        $session = session();
        $data = [
            'title' => 'Ticket | Cineplay',
            'session' => $session,
            'user' => $user
        ];


        return view('user/tiket', $data);
    }

    public function book()
    {
        $session = session();

        $data = [
            'title' => 'Detail Film | Cineplay',
            'session' => $session
        ];


        return view('user/booking', $data);
    }




    public function booking()
    {
        helper(['form']);
        $data = [
            'title' => 'Bayar Cineplay',

        ];
        return view('user/booking', $data);
    }
    public function save()
    {
        helper(['form']);
        $data = [
            'title' => 'Bayar Cineplay',

        ];
        //set rules validation form
        $rules = [
            'nama'          => 'required|min_length[3]|max_length[20]',


        ];

        if ($this->validate($rules)) {
            $model = new BookModel();
            $data = [
                'nama'     => $this->request->getVar('nama'),
                'ttr'     => $this->request->getVar('ttr'),
                'krs'     => $this->request->getVar('krs'),
                'tgl'     => $this->request->getVar('tgl'),
                'jml'     => $this->request->getVar('jml'),
                'jenis'     => $this->request->getVar('jenis'),
            ];
            $model->save($data);
            return redirect()->to('/user/tiket/$slug');
        } else {
            $data['validation'] = $this->validator;
            echo view('/user/booking', $data);
        }
    }
    //--------------------------------------------------------------------

}
