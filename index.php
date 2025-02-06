<!--http://tjbetuah.desa.id-->
<!--http://tj-betuah.great-site.net/-->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekon Tanjung Betuah | Beranda</title>

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
            <div class="page1">
                <main class="col-12 col-md-8 col-lg-9 main-content">
                    <section style="display: flex; gap: 20px; align-items: flex-start;">
                        <div style="flex: 1; text-align: center;">
                            <section>
                                <img src="assets/Kepala_Pekon.png" alt="Kepala Pekon (Ahmad Safiuddin)" width="70%" height="70%" style="border-radius: 10px;">
                            </section>
                        </div>
                        <div style="flex: 2;">
                            <section style="margin-right: 10rem;">
                                <h2>Sambutan Kepala Pekon Tanjung Betuah</h2><br>
                                <p>Assalamu’alaikum warahmatullahi wabarakatuh,</p>
                                <p>Salam sejahtera untuk kita semua,</p>
                                <p>
                                    Selamat datang di <strong>Website Resmi Pekon Tanjung Betuah</strong>, Kecamatan Cukuh Balak, Kabupaten Tanggamus, Lampung.
                                </p>
                                <p>
                                    Dengan luas wilayah 2 km², Pekon Tanjung Betuah memiliki potensi besar di sektor pertanian, perkebunan, dan peternakan, yang didukung oleh sumber daya alam yang melimpah serta fasilitas umum yang memadai. Kami bangga dengan kekayaan alam dan budaya yang dimiliki pekon ini, termasuk pantai-pantai eksotis dan tradisi adat yang kental.
                                </p>
                                <p>
                                    Website ini kami hadirkan sebagai sarana informasi, komunikasi, dan transparansi kepada seluruh masyarakat, baik warga pekon maupun pengunjung dari luar daerah. Melalui platform ini, kami berharap dapat menyampaikan berbagai informasi mengenai potensi desa, kegiatan pemerintahan, pelayanan publik, hingga destinasi wisata unggulan di Pekon Tanjung Betuah.
                                </p>
                                <p>
                                    Kami terus berkomitmen untuk menjadikan pekon ini maju, mandiri, dan sejahtera melalui kerja sama dan partisipasi seluruh masyarakat. Dengan kehadiran website ini, kami mengajak Anda semua untuk turut mendukung pembangunan Pekon Tanjung Betuah dengan memberikan masukan, kritik, dan saran yang membangun demi kemajuan bersama.
                                </p>
                                <p>Terima kasih atas perhatian dan dukungannya.</p>
                                <p>Wassalamu’alaikum warahmatullahi wabarakatuh.</p><br>
                                <p><strong>Kepala Pekon Tanjung Betuah</strong><br>Ahmad Safiauddin</p><br>
                            </section>
                        </div>
                    </section>

                    <section>
                        <br><br><br><br><br><br><br>
                        <h2>Video Profil Pekon Tanjung Betuah</h2><br>
                    
                        <!-- Player YouTube -->
                        <div id="player"></div>
                                            
                        <!-- API Script untuk YouTube Iframe API -->
                        <script src="https://www.youtube.com/iframe_api"></script>
                        <script>
                            let player;
                    
                            // Inisialisasi player saat API siap
                            function onYouTubeIframeAPIReady() {
                                player = new YT.Player('player', {
                                    height: '315',
                                    width: '560',
                                    videoId: 'oqtW2uyhLxw', // ID video YouTube
                                    events: {
                                        'onReady': onPlayerReady
                                    }
                                });
                            }
                    
                            // Fungsi untuk memainkan video
                            function playVideo() {
                                player.playVideo();
                            }
                    
                            // Fungsi untuk menjeda video
                            function pauseVideo() {
                                player.pauseVideo();
                            }
                    
                            // Event saat player siap
                            function onPlayerReady(event) {
                                console.log("Player Ready");
                            }
                        </script>
                    </section><br>                                       
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