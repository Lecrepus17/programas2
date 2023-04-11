<?php

class Model{
    private $driver = 'mysql';
    private $host = 'localhost';
    private $dbname = 'sistematwig';
    private $port = '3306';
    private $user = 'root';
    private $password = null;

    protected $table;
    protected $conex;

    public function __construct(){
        $tbl = strtolower(get_class($this));
        $tbl .='s';
        $this->table = $tbl;
        $this->conex = new PDO("{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbname}", $this->user,$this->password);
    }
    public function getALL(){
        $sql = $this->conex->query("SELECT * FROM {$this->table} WHERE ativo = 1");

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($id){                                           
        $sql = $this->conex->prepare("SELECT * FROM {$this->table} WHERE idusuarios = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }
    public function create($data){                                           
    $sql = "INSERT INTO {$this->table}";
    $sql_fields = $this->sql_fields($data);
    $sql .= " SET {$sql_fields}";
    $insert = $this->conex->prepare($sql);

   // foreach ($data as $field => $value){
   //     $insert->bindValue(":{$field}", $value);
   // }
    
    $insert->execute($data);
    return $insert->errorInfo();
    }

    public function update($data, $id){
        unset($data['id']);
        $sql = "UPDATE {$this->table}";
        $sql .= ' SET ' . $this->sql_fields($data);
        $sql .= " WHERE idusuarios = :id";
        $data['id'] = $id;
        $upd = $this->conex->prepare($sql);
        $upd->bindParam(':id', $id);       
        $upd->execute($data);
    }

    private function sql_fields($data){
        foreach (array_Keys($data) as $field ){
            $sql_fields[] = "{$field} = :{$field}";
        }     
        return implode(', ', $sql_fields);

    }

}





