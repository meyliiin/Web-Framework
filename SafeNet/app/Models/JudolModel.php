<?php

namespace App\Models;

use CodeIgniter\Model;

class JudolModel extends Model
{
    protected $table            = 'judol';
    protected $primaryKey       = 'id';

    protected $allowedFields = [
        'judul',
        'slug',
        'media',
        'deskripsi',
        'created_at',
        'updated_at'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    public function getJudol($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}
