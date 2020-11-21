<?php
require "koneksidb.php";	

// sql to delete a record
$sql = "DELETE FROM tb_simpan";

if ($koneksi->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $koneksi->error;
}

$koneksi->close();
// mengalihkan ke halaman index.php
header("location:tampildata.php");
?>