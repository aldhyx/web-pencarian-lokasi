<?php

namespace App\Controllers;

use App\Models\AlternativeModel;

class AlternativeController extends BaseController
{
    protected $AlternativeModel;
    public function __construct()
    {
        $this->AlternativeModel = new AlternativeModel();
    }

    public function index()
    {
        $alternative = $this->AlternativeModel->findAll();

        $data = [
            'title' => 'Data Alternative',
            'alternative' => $alternative
        ];

        return view('alternative/index', $data);
    }

    public function create()
    {
        $alternative = new AlternativeModel();
     
        $alternative->insert([
            "name" => $this->request->getPost('name'),
            "code" => $this->request->getPost('code'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambakan.');

        return redirect('alternative.index');
    }

    public function delete($id)
    {
        $this->AlternativeModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect('alternative.index');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'form edit data',
            'alternative' => $this->AlternativeModel->getAlternative($id)
        ];

        return view('alternative/edit', $data);
    }

    public function update($id = null)
    {
        $this->AlternativeModel->save([
            'id' => $id,
            "name" => $this->request->getPost('name'),
            "code" => $this->request->getPost('code'),
        ]);
        
        session()->setFlashdata('pesan', 'Data berhasil Update.');
        return redirect('alternative.index');
    }
}
