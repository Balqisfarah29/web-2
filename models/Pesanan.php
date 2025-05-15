<?php
namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class Pesanan
{
  public static function getAll()
  {
    $pdo = Connection::make();
    $stmt = $pdo->query("SELECT * FROM pesanan");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function find($id)
  {
    $pdo = Connection::make();
    $sql = "SELECT * FROM pesanan WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function create($data)
  {
    $pdo = Connection::make();
    $sql = "INSERT INTO pesanan (tanggal, diskon, status_bayar, anggota_id) VALUES (:tanggal, :diskon, :status_bayar, :anggota_id)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
      ':tanggal' => $data['tanggal'],
      ':diskon' => $data['diskon'],
      ':status_bayar' => $data['status_bayar'],
      ':anggota_id' => $data['anggota_id']
    ]);
  }

  public static function update($id, $data)
  {
    $pdo = Connection::make();
    $sql = "UPDATE pesanan SET tanggal = :tanggal, diskon = :diskon, status_bayar = :status_bayar, anggota_id = :anggota_id WHERE id = :id";
    $stmt = $pdo->prepare($sql);
   return $stmt->execute([
      ':tanggal' => $data['tanggal'],
      ':diskon' => $data['diskon'],
      ':status_bayar' => $data['status_bayar'],
      ':anggota_id' => $data['anggota_id']
    ]);
  }

  public static function delete($id)
  {
    $pdo = Connection::make();
    $sql = "DELETE FROM pesanan WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([':id' => $id]);
  }
}