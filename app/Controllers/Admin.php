<?php

namespace App\Controllers;

use App\Models\GuestModel;

class Admin extends BaseController
{
    protected $guestModel;

    public function __construct()
    {
        $this->guestModel = new GuestModel();
    }

    public function index()
    {
        $data['guests'] = $this->guestModel->orderBy('created_at', 'DESC')->findAll();
        return view('admin/dashboard', $data);
    }

    public function delete($id)
    {
        $this->guestModel->delete($id);
        session()->setFlashdata('success', 'Data tamu berhasil dihapus');
        return redirect()->to(base_url('admin'));
    }
}