<?php

namespace App\Models;

use CodeIgniter\Model;

class AlternativeModel extends Model
{
    protected $table = 'alternative';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'code'];

    public function getalternative($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
