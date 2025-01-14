<?php

namespace App\Controllers;

use App\Models\GuestModel;

class GuestBook extends BaseController
{
    protected $guestModel;

    public function __construct()
    {
        $this->guestModel = new GuestModel();
    }

    public function index()
    {
        return view('guestbook/form');
    }

    public function submit()
    {
        if (!$this->validate($this->guestModel->validationRules)) {
            return view('guestbook/form', [
                'validation' => $this->validator
            ]);
        }

        $this->guestModel->save([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'message' => $this->request->getPost('message')
        ]);

        session()->setFlashdata('success', 'Terima kasih telah mengisi buku tamu!');
        return redirect()->to(base_url());
    }
}