<?php
require_once 'Database.php';

class Vaccine extends Database
{
    public function __construct()
    {
        $this->table = 'vaccine';
        parent::__construct();
    }

    public function listVaccine()
    {
        return $this->list();
    }

    public function createVaccine(array $vaccine)
    {
        return $this->insert($vaccine);
    }

    public function getVaccine(array $data)
    {
        return $this->load($data);
    }

    public function updateVaccine(array $data)
    {
        return $this->update($data);
    }

    public function deleteVaccine(array $data)
    {
        return $this->delete($data);
    }
}
