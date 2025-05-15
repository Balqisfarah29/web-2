<?php
namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class KartuDiskon
{
    public static function getAll()
    {
        $pdo = Connection::make();
        $stmt = $pdo->query("SELECT * FROM kartu_diskon");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $pdo = Connection::make();
        $sql = "SELECT * FROM kartu_diskon WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($data)
    {
        $pdo = Connection::make();
        $sql = "INSERT INTO kartu_diskon (nama, deskripsi, persen_diskon) VALUES (:nama, :deskripsi, :persen_diskon)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':nama' => $data['nama'],
            ':deskripsi' => $data['deskripsi'],
            ':persen_diskon' => $data['persen_diskon'],
        ]);
    }

    public static function update($id, $data)
    {
        $pdo = Connection::make();
        $sql = "UPDATE kartu_diskon SET nama = :nama, deskripsi = :deskripsi, persen_diskon = :persen_diskon WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':nama' => $data['nama'],
            ':deskripsi' => $data['deskripsi'],
            ':persen_diskon' => $data['persen_diskon'],
        ]);
    }

    public static function delete($id)
    {
        $pdo = Connection::make();
        $sql = "DELETE FROM kartu_diskon WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}