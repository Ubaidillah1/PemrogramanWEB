<?php
include 'koneksi_pgsql.php';

try {
    $sql = "SELECT * FROM mahasiswa ORDER BY nim";
    $stmt = $koneksi->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa - PostgreSQL</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #0a192f;
            color: #e6f1ff;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .section-title {
            font-size: 32px;
            margin-bottom: 30px;
            color: #64ffda;
            text-align: center;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .data-table th {
            background-color: #112240;
            color: #64ffda;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }

        .data-table td {
            padding: 12px 15px;
            border-bottom: 1px solid #e0e4cc;
            color: #0a192f;
        }

        .data-table tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        .data-table tr:hover {
            background-color: #e3f2fd;
        }

        .btn-back {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #64ffda;
            color: #0a192f;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #4fd3b0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="section-title">Data Mahasiswa</h1>
        
        <table class="data-table">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (count($result) > 0) {
                    foreach($result as $row) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["nim"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["nama"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["kelas"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>Tidak ada data mahasiswa</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="index.html" class="btn-back">Kembali ke Portofolio</a>
    </div>
</body>
</html>