<?php  
include('Model.php'); 
 
class KategoriModel extends Model { 
    protected $db; 
    protected $table = 'm_kategori'; 
    protected $driver; 
 
    public function __construct() { 
        include_once('../lib/Connection.php'); 
        $this->db = $db; 
        $this->driver = $use_driver; 
    } 
 
    public function insertData($data) { 
        if ($this->driver == 'mysql') { 
            // Prepare statement untuk query insert 
            $query = $this->db->prepare("INSERT INTO {$this->table} (kategori_kode, kategori_nama) VALUES (?, ?)");
            $query->bind_param('ss', $data['kategori_kode'], $data['kategori_nama']); 
            $query->execute(); 
        } else { 
            // Query untuk menyimpan data ke database (SQL Server)
            sqlsrv_query($this->db, "INSERT INTO {$this->table} (kategori_kode, kategori_nama) VALUES (?, ?)", [
                $data['kategori_kode'], 
                $data['kategori_nama']
            ]); 
        } 
    } 
 
    public function getData() { 
        if ($this->driver == 'mysql') { 
            // Query untuk mengambil semua data dari tabel 
            return $this->db->query("SELECT * FROM {$this->table}")->fetch_all(MYSQLI_ASSOC); 
        } else { 
            // Query untuk mengambil semua data dari tabel (SQL Server)
            $query = sqlsrv_query($this->db, "SELECT * FROM {$this->table}"); 
            $data = []; 
            while ($row = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
                $data[] = $row; 
            } 
            return $data; 
        } 
    } 
 
    public function getDataById($id) { 
        if ($this->driver == 'mysql') { 
            // Query untuk mengambil data berdasarkan ID 
            $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE kategori_id = ?");
            $query->bind_param('i', $id); 
            $query->execute(); 
            return $query->get_result()->fetch_assoc(); 
        } else { 
            // Query untuk mengambil data berdasarkan ID (SQL Server)
            $query = sqlsrv_query($this->db, "SELECT * FROM {$this->table} WHERE kategori_id = ?", [$id]); 
            return sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC); 
        } 
    } 
 
    public function updateData($id, $data) { 
        if ($this->driver == 'mysql') { 
            // Query untuk mengupdate data berdasarkan ID 
            $query = $this->db->prepare("UPDATE {$this->table} SET kategori_kode = ?, kategori_nama = ? WHERE kategori_id = ?");
            $query->bind_param('ssi', $data['kategori_kode'], $data['kategori_nama'], $id); 
            $query->execute(); 
        } else { 
            // Query untuk mengupdate data berdasarkan ID (SQL Server)
            sqlsrv_query($this->db, "UPDATE {$this->table} SET kategori_kode = ?, kategori_nama = ? WHERE kategori_id = ?", [
                $data['kategori_kode'], 
                $data['kategori_nama'], 
                $id
            ]); 
        } 
    } 
 
    public function deleteData($id) { 
        if ($this->driver == 'mysql') { 
            // Query untuk menghapus data berdasarkan ID 
            $query = $this->db->prepare("DELETE FROM {$this->table} WHERE kategori_id = ?");
            $query->bind_param('i', $id); 
            $query->execute(); 
        } else { 
            // Query untuk menghapus data berdasarkan ID (SQL Server)
            sqlsrv_query($this->db, "DELETE FROM {$this->table} WHERE kategori_id = ?", [$id]); 
        } 
    } 
}
?>