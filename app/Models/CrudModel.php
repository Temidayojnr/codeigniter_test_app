<?php namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public $table = 'test_table';

    function createData($data)
    {
        return $this->db->table('test_table')->insert($data);
    }

}
