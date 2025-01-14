<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'guests';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'message', 'created_at'];
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]',
        'email' => 'required|valid_email',
        'message' => 'required|min_length[10]|max_length[500]'
    ];

    protected $validationMessages = [
        'name' => [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama minimal 3 karakter',
            'max_length' => 'Nama maksimal 100 karakter'
        ],
        'email' => [
            'required' => 'Email harus diisi',
            'valid_email' => 'Format email tidak valid'
        ],
        'message' => [
            'required' => 'Pesan harus diisi',
            'min_length' => 'Pesan minimal 10 karakter',
            'max_length' => 'Pesan maksimal 500 karakter'
        ]
    ];
}