<?php

namespace App\Controllers;

use App\Models\CriteriaModel;

class CriteriaController extends BaseController
{
    protected $CriteriaModel;
    public function __construct()
    {
        $this->CriteriaModel = new CriteriaModel();
    }
    public function index()
    {
        $criteria = $this->CriteriaModel->findAll();
        $data = [
            'title' => 'Data kriteria',
            'criteria' => $criteria
        ];
        return view('criteria/index', $data);
    }
    public function create()
    {
        $criteria = new CriteriaModel();

        $criteria->insert([
            "name" => $this->request->getPost('name'),
            "code" => $this->request->getPost('code'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambakan.');

        return redirect('admin.criteria.index');
    }

    public function delete($id)
    {
        $this->CriteriaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');

        return redirect('admin.criteria.index');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'form edit data',
            'criteria' => $this->CriteriaModel->getCriteria($id)
        ];

        return view('criteria/edit', $data);
    }

    public function update($id = null)
    {
        $this->CriteriaModel->save([
            'id' => $id,
            "name" => $this->request->getPost('name'),
            "code" => $this->request->getPost('code'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil Update.');
        return redirect('admin.criteria.index');
    }
}
