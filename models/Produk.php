<?php
namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class Produk
{
    public static function getAll()
    {
        $pdo = Connection::make();
        $sql = "SELECT * FROM produk";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id)
    {
        $pdo = Connection::make();
        $sql = "SELECT * FROM produk WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function update($id, $data)
    {
        $pdo = Connection::make();
        $sql = "UPDATE produk SET nama = :nama, deskripsi = :deskripsi, harga = :harga, stok = :stok WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':nama' => $data['nama'],
            ':deskripsi' => $data['deskripsi'],
            ':harga' => $data['harga'],
            ':stok' => $data['stok']
        ]);
    }
    public static function create($data)
    {
        $pdo = Connection::make();
        $sql = "INSERT INTO produk (nama, deskripsi, harga, stok) VALUES (:nama, :deskripsi, :harga, :stok)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':nama' => $data['nama'],
            ':deskripsi' => $data['deskripsi'],
            ':harga' => $data['harga'],
            ':stok' => $data['stok']
        ]);
    }

    public static function delete($id)
    {
        $pdo = Connection::make();
        $sql = "DELETE FROM produk WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}
