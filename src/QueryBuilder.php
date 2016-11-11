<?php

class QueryBuilder {
  protected $pdo;

  public function __construct () {
    $config = require '../config/config.php';
    $this->pdo = Connection::make($config['database']);
  }

  public function selectAll ($table){
    $statement = $this->pdo->prepare("select * from {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function selectOne($table, $id) {
    $statement = $this->pdo->prepare("select * from {$table} where id = ?");
    $statement->execute([$id]);
    return $statement->fetchAll(PDO::FETCH_CLASS);
  }

  public function addUser($table, $formData) {
    $statement = $this->pdo->prepare("insert into {$table} (first_name, last_name, email, bio) values(?, ?, ?, ?)");
    $statement->execute([$formData['first_name'], $formData['last_name'], $formData['email'], $formData['bio']]);
    return true;
  }

  public function removeOne ($table, $id) {
    $statement = $this->pdo->prepare("delete from {$table} where id = ?");
    $statement->execute([$id]);
    return true;
  }

  public function update($table, $id, $data) {
    $statement = $this->pdo->prepare("update {$table} set first_name = ?, last_name = ?, email = ?, bio = ? where id = ?");
    $statement->execute([$data['first_name'], $data['last_name'], $data['email'], $data['bio'], $id]);
    return true;
  }


}
