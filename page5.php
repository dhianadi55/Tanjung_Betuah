<!-- 
Membuat Database dan Tabel
1. Akses phpMyAdmin
Buka browser (Internet Explorer) dan akses http://localhost/phpmyadmin.

2. Buat Database
Klik New, masukkan nama database data_bantuan, lalu klik Create.

3. Buat Tabel
Dalam database data_bantuan, buat tabel bernama penerima dengan struktur berikut:
- Kolom id (INT, Primary Key, Auto Increment)
- Kolom nama (VARCHAR(100))
- Kolom pbi (VARCHAR(50))
- Kolom pkh (VARCHAR(50))
- Kolom bpnt (VARCHAR(50))
 -->

<!-- 
INSERT INTO penerima (nama, pbi, pkh, bpnt) VALUES
('Dhian Adi Nugraha', 'Tidak', 'Ya', 'Ya');
 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekon Tanjung Betuah | Penerima Manfaat</title>

    <!--sheet-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <img src="assets\Logo_Pekon.png" alt="Logo" width="3%" height="3%">
        <a href="#" class="navbar-logo">Pekon <span>Tanjung Betuah</span></a>    

        <div class="navbar-nav">
            <a href="index.php">Beranda</a>
            <a href="page2.php">Tentang Pekon</a>
            <a href="page3.php">Pariwisata</a>
            <a href="page4.php">Galeri</a>
            <a href="page5.php">Penerima Manfaat</a>
            <a href="page6.php">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="menu"><i data-feather="menu"></i></a>
        </div>
    </nav>

    <main>
        <div class="container mt-4">
            <div class="row">
                <main class="col-12 col-md-8 col-lg-9 main-content">
                    <section>
                        <h2>1. PBI (Penerima Bantuan Iuran)</h2>
                        <p><strong>Apa itu PBI?</strong><br>
                        PBI adalah program bantuan dari pemerintah untuk masyarakat miskin yang tidak mampu membayar iuran BPJS Kesehatan. Melalui program ini, pemerintah menanggung biaya iuran JKN (Jaminan Kesehatan Nasional) bagi warga yang terdaftar sebagai penerima manfaat. Program ini memastikan bahwa semua warga dapat mengakses layanan kesehatan tanpa terbebani biaya.</p>
                        
                        <p><strong>Undang-Undang yang Melandasi:</strong></p>
                        <ul>
                            <li>UU No. 40 Tahun 2004 tentang Sistem Jaminan Sosial Nasional (SJSN)</li>
                            <li>UU No. 24 Tahun 2011 tentang Badan Penyelenggara Jaminan Sosial (BPJS)</li>
                        </ul>
                    
                        <p><strong>Siapa yang Berhak Menerima?</strong><br>
                        Penerima manfaat PBI adalah warga negara Indonesia yang tidak mampu membayar iuran BPJS Kesehatan. Program ini berlaku di seluruh Indonesia, dan dapat diakses oleh warga yang telah terdaftar dalam sistem BPJS Kesehatan.</p>
                    
                        <p><strong>Kapan Program Ini Berlaku?</strong><br>
                        Program PBI mulai diberlakukan setelah disahkannya BPJS Kesehatan pada tahun 2014, sesuai dengan UU No. 24/2011.</p>
                    
                        <p><strong>Mengapa PBI Diberikan?</strong><br>
                        Tujuan dari program PBI adalah untuk memberikan akses layanan kesehatan yang terjamin bagi masyarakat miskin dan tidak mampu.</p>
                    
                        <p><strong>Bagaimana Cara Mendapatkan PBI?</strong><br>
                        Penerima manfaat PBI akan terdaftar secara otomatis dalam sistem BPJS Kesehatan, dan pemerintah menanggung biaya iuran untuk mereka.</p>
                    </section><br>
                    
                    <section>
                        <h2>2. PKH (Program Keluarga Harapan)</h2>
                        <p><strong>Apa itu PKH?</strong><br>
                        PKH adalah program bantuan sosial bersyarat yang diberikan kepada keluarga miskin dengan tujuan untuk meningkatkan kesejahteraan keluarga dan memutuskan rantai kemiskinan. Bantuan ini disalurkan dengan syarat tertentu, seperti anak yang bersekolah atau ibu hamil yang memeriksakan kesehatan.</p>
                        
                        <p><strong>Undang-Undang yang Melandasi:</strong></p>
                        <ul>
                            <li>UU No. 13 Tahun 2011 tentang Penanganan Fakir Miskin</li>
                            <li>UU No. 11 Tahun 2009 tentang Kesejahteraan Sosial</li>
                        </ul>
                    
                        <p><strong>Siapa yang Berhak Menerima?</strong><br>
                        Penerima manfaat PKH adalah keluarga miskin yang memenuhi kriteria tertentu, seperti memiliki anak yang bersekolah atau ibu hamil yang memeriksakan kesehatan.</p>
                    
                        <p><strong>Kapan Program Ini Berlaku?</strong><br>
                        Program ini dimulai pada tahun 2007 dan terus berlanjut hingga saat ini.</p>
                    
                        <p><strong>Mengapa PKH Diberikan?</strong><br>
                        PKH bertujuan untuk meningkatkan kualitas hidup keluarga miskin dengan memberikan bantuan keuangan yang bersyarat, agar mereka dapat memenuhi kebutuhan dasar seperti pendidikan dan kesehatan.</p>
                    
                        <p><strong>Bagaimana Cara Mendapatkan PKH?</strong><br>
                        Keluarga yang memenuhi persyaratan tertentu akan didaftarkan dalam program PKH oleh pemerintah dan menerima bantuan sesuai dengan kondisi mereka.</p>
                    </section><br>
                    
                    <section>
                        <h2>3. BPNT (Bantuan Pangan Non Tunai)</h2>
                        <p><strong>Apa itu BPNT?</strong><br>
                        BPNT adalah bantuan dari pemerintah yang diberikan dalam bentuk kartu non-tunai, yang dapat digunakan untuk membeli bahan pangan di agen atau warung yang ditunjuk pemerintah. Program ini bertujuan untuk meningkatkan ketahanan pangan keluarga miskin.</p>
                        
                        <p><strong>Undang-Undang yang Melandasi:</strong></p>
                        <ul>
                            <li>UU No. 18 Tahun 2012 tentang Pangan</li>
                            <li>PP No. 28 Tahun 2004 tentang Penyediaan dan Distribusi Pangan</li>
                        </ul>
                    
                        <p><strong>Siapa yang Berhak Menerima?</strong><br>
                        Penerima manfaat BPNT adalah keluarga miskin yang terdaftar dalam Data Terpadu Kesejahteraan Sosial (DTKS), yang dikelola oleh pemerintah.</p>
                    
                        <p><strong>Kapan Program Ini Berlaku?</strong><br>
                        BPNT mulai dilaksanakan pada tahun 2017, menggantikan program sebelumnya, yaitu Rastra (Beras Sejahtera).</p>
                    
                        <p><strong>Mengapa BPNT Diberikan?</strong><br>
                        Program BPNT bertujuan untuk membantu keluarga miskin dalam memperoleh bahan pangan yang cukup dan berkualitas.</p>
                    
                        <p><strong>Bagaimana Cara Mendapatkan BPNT?</strong><br>
                        Penerima manfaat dapat menggunakan kartu BPNT yang diberikan untuk membeli bahan pangan di agen atau warung yang telah ditunjuk pemerintah.</p>
                    </section><br>

                    <section>
                        <div class="container">
                            <h2>Data Penerima Manfaat</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>PBI</th>
                                        <th>PKH</th>
                                        <th>BPNT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php include 'get_data.php'; ?>
                                </tbody>
                            </table>
                        </div>
                    </section>
                    <section>
                        <br>
                        <p>
                            Kami berharap informasi ini bermanfaat bagi warga Pekon Tanjung Betuah dan pengunjung website. Jika Anda atau keluarga Anda memenuhi syarat untuk salah satu program ini, pastikan untuk segera mendaftar dan memperoleh manfaat dari program-program pemerintah yang dapat meningkatkan kesejahteraan hidup. Terus dukung bersama pembangunan desa melalui partisipasi aktif Anda.
                        </p>
                    </section>
                </main>
            </div>
        </div>
    </main>
        
    <footer>
        <div class="container">
            <h4>&copy; 2025 Desa Tanjung Betuah. Seluruh hak cipta dilindungi.</h4>
        </div>
    </footer>

    <script>
        feather.replace();
    </script>
    <script src="js/script.js"></script>
</body>
</html>