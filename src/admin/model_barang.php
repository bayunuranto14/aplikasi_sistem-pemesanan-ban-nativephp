<?php
// require '../koneksi.php';
class Produk
{
    private $mysqli;

    function __construct($koneksi)
    {
        $this->mysqli = $koneksi;
    }

    public function tampil($id = null)
    {
        $db     = $this->mysqli->koneksi;
        $sql    = "SELECT * FROM tb_barang";
        if ($id != null) {
            $sql .= "WHERE id_barang = $id";
        }
        $query = $db->query($sql) or die($db->error);
        return $query;
    }
}
