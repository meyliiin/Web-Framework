<?php

namespace App\Controllers;

use App\Models\JudolModel;

class Home extends BaseController
{
    protected $judolModel;

    public function __construct()
    {
        $this->judolModel = new JudolModel(); // Inisialisasi model judol
    }

    public function index()
    {
        $model = new \App\Models\JudolModel();
        $data['judol'] = $model->orderBy('created_at', 'DESC')->limit(4)->find();
        return view('home', $data);
    }

    public function katalog()
    {
        helper('text');

        $currentPage = $this->request->getVar('page_judol') ?: 1;

        // Ambil data judol terbaru dengan pagination
        $judol = $this->judolModel
            ->orderBy('created_at', 'DESC') // Pastikan kolom ini tersedia
            ->paginate(9, 'judol', $currentPage);

        $data = [
            'judol' => $judol,
            'pager' => $this->judolModel->pager,
            'currentPage' => $currentPage
        ];

        return view('katalog', $data);
    }


    public function judol($slug)
    {
        if ($slug === null) {
            return redirect()->to('/index');
        }

        $judol = $this->judolModel->getJudol($slug);

        if (empty($judol)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Info Judol dengan slug '$slug' tidak ditemukan");
        }

        $data = [
            'judol' => $judol,
        ];

        return view('judol', $data);
    }
}
