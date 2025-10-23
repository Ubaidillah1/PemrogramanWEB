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
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
      <section id="data-mahasiswa" class="data-section">
            <div class="container">
                <h2 class="section-title">Data Mahasiswa</h2>
                <p style="text-align: center; margin-bottom: 30px; color: #a8b2d1;">
                    Berikut adalah data mahasiswa yang tersimpan di database PostgreSQL
                </p>
                    <div style="text-align: center;">
                    <a href="data_mahasiswa_pgsql.php" 
                    style="display: inline-block; 
                      padding: 12px 30px; 
                      background-color: #64ffda; 
                      color: #0a192f; 
                      text-decoration: none; 
                      border-radius: 5px; 
                      font-weight: bold;
                      transition: background-color 0.3s;">
                    </a>
                </div>
            </div>
        </section>
    <header>
        <div class="container">
            <nav>
                <div class="logo">Ubaidillah</div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>                    
                </ul>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Portofolio</h1>
                <h2>Tugas UTS WEB Statis</h2>
                <p>Membuat web statis dengan css, html dan javascript</p>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Me</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Saya adalah seorang Mahasiswa Sistem Informasi Bisnis dengan passion yang kuat dalam menciptakan solusi digital yang strategis dan fungsional. Saya memadukan pemahaman bisnis yang kuat dengan keahlian teknis untuk membangun aplikasi yang tidak hanya secara visual menarik, tetapi juga mendukung tujuan bisnis dan operasional yang efisien.</p>
                    <p>Dengan ketertarikan mendalam pada pengembangan web modern dan aspek keamanan sistem (cyber), fokus saya adalah pada bagaimana teknologi dapat diimplementasikan untuk menciptakan nilai, meningkatkan kinerja, dan mengamankan aset digital dalam sebuah organisasi.</p>
                    <p>Saya selalu bersemangat untuk mempelajari tren teknologi dan tantangan bisnis terbaru, yang memungkinkan saya terus berkembang menjadi seorang profesional di bidang Sistem Informasi yang siap menghadapi dinamika dunia digital.</p>
                </div>
                <div class="about-image">
                    <img src="Asset/_Feast Membangun & Menghancurkan.jpeg"
                    alt="Foto Profil"
                    class="profile-img" />
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Skills</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <h3>Frontend Development</h3>
                    <p>HTML, CSS, JavaScript, React, Vue.js, Responsive Design</p>
                </div>
                <div class="skill-card">
                    <h3>Backend Development</h3>
                    <p>Node.js, Express, MongoDB, MySQL, RESTful APIs</p>
                </div>
                <div class="skill-card">
                    <h3>Cyber Security</h3>
                    <p>Network Security, Ethical Hacking, Security Auditing</p>
                </div>
                <div class="skill-card">
                    <h3>Tools & Technologies</h3>
                    <p>Git, Docker, AWS, Linux, CI/CD, Testing</p>
                </div>
            </div>
        </div>
    </section>
    
    <script src="javascript.js"></script>
</body>
</html>