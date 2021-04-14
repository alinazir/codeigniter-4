<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model
{
   public function savePerson($data)
   {
       return $this->db->table('person')->insert($data);
   }

    public function getPersons()
    {
        $db      = \Config\Database::connect();

        return $db->table('person')->get();
    }

    public function personById($id)
    {
        return $this->db->table('person')->where('id',$id)->get();
    }

    public function updatePerson($id,$data)
    {
        return $this->db->table('person')->where('id',$id)->update($data);
    }
}
