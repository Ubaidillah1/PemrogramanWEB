<?php
$host = "localhost";
$port = "5432";
$dbname = "portofolio_ubaid";
$username = "postgres";
$password = "Rahasiaku1";

try {
    $koneksi = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Koneksi PostgreSQL BERHASIL!";
    
    // Test query
    $test = $koneksi->query("SELECT version()");
    $version = $test->fetch();
    echo "<br>📊 PostgreSQL Version: " . $version[0];
    
} catch (PDOException $e) {
    echo "❌ Koneksi GAGAL: " . $e->getMessage();
    echo "<br>🔧 Detail Error:";
    echo "<br>- Host: " . $host;
    echo "<br>- Port: " . $port;
    echo "<br>- Database: " . $dbname;
    echo "<br>- Username: " . $username;
}
?>