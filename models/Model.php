<?php

class Model{
    //NÃO INDICADO

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
        $tbl .= 's';
        $this->table = $tbl;

        $this->conex = new PDO("{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbname}", $this->user, $this->password);
    }

    public function getAll(){
        $sql = $this->conex->query("SELECT * FROM {$this->table}");

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $sql = $this->conex->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data){
        //inicia a contrução do sql
        $sql = "INSERT INTO {$this->table} ";

        $sql_fields = $this->sql_fields($data); 

        $sql .= " SET {$sql_fields}";
        $insert = $this->conex->prepare($sql);

        //foreach($data as $field => $value){
        //    $insert->bindValue(":{$field}", $value);
        //}
        $insert->execute($data);

        return $insert->errorInfo();

        die;
    }

    public function update($data, $id){

    }

    private function sql_fields($data){
        //prepara os campos e placeholders
        foreach(array_keys($data) as $field){
            $sql_fields[] = "{$field} = :{$field}";
        }

        return implode(', ', $sql_fields);
    }
}