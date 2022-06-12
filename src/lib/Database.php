<?php
class Database
{
    protected $table;

    private $conn;

    private $num_rows;

    public function __construct()
    {
        $servername = 'localhost';
        $username   = 'root';
        $password   = '';
        $dbname     = 'fernando';

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection Failed" . $this->conn->connect_error);
        }
    }

    private function query(String $query)
    {
        $qR = $this->conn->query($query);
        $this->num_rows = $this->conn->num_rows;
        // $this->conn->close();

        return $qR;
    }

    protected function list()
    {
        $query = "SELECT * FROM `{$this->table}`";
        $data = [];
        $qR = $this->query($query);

        foreach ($qR as  $row) {
            $data[] = $row;
        }

        return $data;
    }

    protected function insert(array $data)
    {
        $query = "INSERT INTO `{$this->table}` (keys) VALUES (values)";
        $keys = "";
        $values = "";
        $dateNow = date('Y-m-d H:i:s');
        $index = 0;

        foreach ($data as $key => $value) {
            if ($value) {
                $keys .= "{$key},";
                $values .= "'{$value}',";
            }

            $index++;
        }

        $keys .= "dateCreated";
        $values .= "'{$dateNow}'";

        $query = str_replace("keys", $keys, $query);
        $query = str_replace("values", $values, $query);

        return $this->query($query);
    }

    protected function load(array $data)
    {
        $query = "SELECT * FROM `{$this->table}` WHERE 1 AND key='value'";

        $key = array_keys($data)[0];
        $query = str_replace("key", $key, $query);
        $query = str_replace("value", $data[$key], $query);

        $qR = $this->query($query);

        return $qR->fetch_object();
    }

    protected function update(array $data)
    {
        $query = "UPDATE `{$this->table}` SET ";
        $id = $data['id'];
        unset($data['id']);
        $dateUpdate = date('Y-m-d H:i:s');
        $index = 0;

        foreach ($data as $key => $value) {
            $query .= "{$key}='{$value}',";
            $index++;
        }

        $query .= "dateUpdate='{$dateUpdate}' ";
        $query .= "WHERE id={$id}";

        return $this->query($query);
    }

    protected function delete(array $data)
    {
        $id = $data['id'];
        unset($data);
        $query = "DELETE FROM `{$this->table}` WHERE id={$id} ";
        return $this->query($query);
    }
}
