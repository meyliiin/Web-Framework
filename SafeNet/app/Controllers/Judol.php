<?php

namespace App\Controllers;

use App\Models\JudolModel;

class Judol extends BaseController
{
    protected $judolModel;

    public function __construct()
    {
        $this->judolModel = new JudolModel(); // Inisialisasi model judol
    }

    public function index()
    {
        helper('text');

        if (!session()->get('logged_in')) {
            return redirect()->to('/login'); // Cek apakah sudah login
        }

        $currentPage = $this->request->getVar('page_judol') ?: 1;

        // Ambil data judol terbaru dengan pagination
        $judol = $this->judolModel
            ->orderBy('created_at', 'DESC') // Pastikan kolom ini ada di tabel
            ->paginate(5, 'judol', $currentPage);

        $data = [
            'judol' => $judol,
            'pager' => $this->judolModel->pager,
            'currentPage' => $currentPage
        ];

        return view('admin/dashboard', $data);
    }

    public function detail($slug)
    {
        helper('text');

        $judol = $this->judolModel->where('slug', $slug)->first();

        if (!$judol) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Info Judol tidak ditemukan.');
        }

        $data = [
            'title' => $judol['judul'],
            'judol' => $judol
        ];

        return view('admin/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Judol Baru',
            'validation' => session('validation') ?? \Config\Services::validation()
        ];

        return view('admin/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'judul' => [
                'rules' => 'required|is_unique[judol.judul]',
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'media' => [
                'rules' => 'is_image[media]|mime_in[media,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa media.',
                    'mime_in' => 'Format media harus JPG, JPEG, atau PNG.'
                ]
            ]
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $media = $this->request->getFile('media');
        $namaMedia = $media && $media->isValid() ? $media->getRandomName() : 'default.jpg';

        if ($media && $media->isValid()) {
            $media->move(FCPATH . 'assets/img/', $namaMedia);
        }

        $this->judolModel->save([
            'judul' => $this->request->getVar('judul'),
            'slug' => url_title($this->request->getVar('judul'), '-', true),
            'deskripsi' => $this->request->getVar('deskripsi'),
            'video_url' => $this->request->getVar('video_url'),
            'media' => $namaMedia
        ]);

        session()->setFlashdata('pesan', 'Judol berhasil ditambahkan.');
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $judol = $this->judolModel->find($id);

        if ($judol && $judol['media'] != 'default.jpg') {
            $path = FCPATH . 'assets/img/' . $judol['media'];
            if (file_exists($path)) {
                unlink($path);
            }
        }

        $this->judolModel->delete($id);

        session()->setFlashdata('pesan', 'Data Judol berhasil dihapus.');
        return redirect()->to('/admin');
    }

    public function edit($slug)
    {
        $judol = $this->judolModel->asArray()->where('slug', $slug)->first();

        if (!$judol) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Data Judol tidak ditemukan.');
        }

        $data = [
            'title' => 'Edit Judol',
            'validation' => session('validation') ?? \Config\Services::validation(),
            'judol' => $judol
        ];

        return view('admin/edit', $data);
    }

    public function update($id)
    {
        $judolLama = $this->judolModel->find($id);

        if (!$judolLama) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Judol tidak ditemukan.');
        }

        $rule_judul = ($judolLama['judul'] == $this->request->getVar('judul'))
            ? 'required'
            : 'required|is_unique[judol.judul]';

        if (!$this->validate([
            'judul' => [
                'rules' => $rule_judul,
                'errors' => [
                    'required' => 'Judul harus diisi.',
                    'is_unique' => 'Judul sudah terdaftar.'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Deskripsi harus diisi.'
                ]
            ],
            'media' => [
                'rules' => 'is_image[media]|mime_in[media,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'is_image' => 'File harus berupa media.',
                    'mime_in' => 'Format media harus JPG, JPEG, atau PNG.'
                ]
            ]
        ])) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $fileMedia = $this->request->getFile('media');
        $namaMedia = $judolLama['media'];

        if ($fileMedia && $fileMedia->isValid() && !$fileMedia->hasMoved()) {
            $namaMedia = $fileMedia->getRandomName();
            $fileMedia->move(FCPATH . 'assets/img/', $namaMedia);

            if ($judolLama['media'] != 'default.jpg' && file_exists(FCPATH . 'assets/img/' . $judolLama['media'])) {
                unlink(FCPATH . 'assets/img/' . $judolLama['media']);
            }
        }

        $slugBaru = url_title($this->request->getVar('judul'), '-', true);

        // Ambil data baru dari request
        $data = [
            'judul' => $this->request->getVar('judul'),
            'slug' => $slugBaru,
            'deskripsi' => $this->request->getVar('deskripsi'),
            'media' => $namaMedia
        ];

        // Cek perubahan
        $adaPerubahan = false;
        foreach ($data as $key => $value) {
            if ($judolLama[$key] != $value) {
                $adaPerubahan = true;
                break;
            }
        }

        if ($adaPerubahan) {
            $this->judolModel->update($id, $data);
            session()->setFlashdata('pesan', 'Data Judol berhasil diperbarui');
        } else {
            session()->setFlashdata('pesan', 'Tidak ada perubahan data');
        }
        return redirect()->to('/admin');
    }
}
