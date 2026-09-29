<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>LaundryKu - Sistem Informasi Laundry</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #fffaf2;
            color: #294654;
        }

        /* NAVBAR */
        nav {
            height: 75px;
            padding: 0 8%;

            display: flex;
            align-items: center;
            justify-content: space-between;

            position: fixed;
            top: 0;
            left: 0;
            width: 100%;

            background: #fffaf2;
            box-shadow: 0 3px 15px rgba(0,0,0,0.08);

            z-index: 1000;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            color: #579db3;
        }

        .menu {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .menu a {
            text-decoration: none;
            color: #526a75;
            font-size: 14px;
        }

        .menu a:hover {
            color: #579db3;
        }

        .login {
            background: #72b7ca;
            color: white !important;
            padding: 11px 23px;
            border-radius: 25px;
        }

        /* HERO */
        .hero {
            min-height: 100vh;
            padding: 140px 8% 70px;

            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;

            background:
                radial-gradient(circle at 90% 15%, #dff4f7, transparent 30%),
                #fffaf2;
        }

        .hero-text {
            width: 52%;
        }

        .badge {
            display: inline-block;
            padding: 9px 17px;
            margin-bottom: 20px;

            border-radius: 30px;
            background: #e2f4f6;
            color: #579db3;

            font-size: 13px;
        }

        h1 {
            font-size: 55px;
            line-height: 1.15;
            margin-bottom: 20px;
        }

        h1 span {
            color: #65adc0;
        }

        .hero p {
            color: #71828b;
            line-height: 1.8;
            max-width: 550px;
            margin-bottom: 30px;
        }

        .btn {
            display: inline-block;

            padding: 14px 27px;

            border-radius: 30px;

            background: #72b7ca;
            color: white;

            text-decoration: none;
            font-weight: bold;
        }

        .btn:hover {
            background: #579db3;
        }

        /* ILUSTRASI */
        .visual {
            width: 42%;
            display: flex;
            justify-content: center;
        }

        .circle {
            width: 390px;
            height: 390px;

            border-radius: 50%;
            background: #dff3f7;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .machine {
            width: 230px;
            height: 230px;

            border-radius: 50%;

            border: 12px solid #72b7ca;
            background: #fffaf2;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .machine-inner {
            width: 150px;
            height: 150px;

            border-radius: 50%;
            background: #bfe6ed;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 65px;
        }

        /* SECTION */
        section {
            padding: 90px 8%;
        }

        .title {
            text-align: center;
            margin-bottom: 45px;
        }

        .title h2 {
            font-size: 34px;
            margin-bottom: 10px;
        }

        .title p {
            color: #7b8b91;
        }

        /* LAYANAN */
        .services {
            background: #f7fcfc;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .card {
            background: white;
            padding: 35px 25px;

            text-align: center;

            border-radius: 25px;

            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }

        .icon {
            font-size: 45px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            color: #7b8b91;
            font-size: 14px;
            line-height: 1.7;
        }

        /* CTA */
        .cta {
            text-align: center;
        }

        .cta-box {
            padding: 60px 30px;

            border-radius: 30px;

            background: linear-gradient(
                135deg,
                #dff3f7,
                #f7e8d5
            );
        }

        .cta-box h2 {
            margin-bottom: 15px;
        }

        .cta-box p {
            color: #687d87;
            margin-bottom: 25px;
        }

        /* FOOTER */
        footer {
            background: #294654;
            color: white;

            text-align: center;

            padding: 30px;
        }

        footer p {
            color: #c4d1d5;
            font-size: 13px;
        }

        @media(max-width: 800px) {

            .menu a:not(.login) {
                display: none;
            }

            .hero {
                flex-direction: column;
                text-align: center;
            }

            .hero-text,
            .visual {
                width: 100%;
            }

            .hero p {
                margin-left: auto;
                margin-right: auto;
            }

            .cards {
                grid-template-columns: 1fr;
            }

            .circle {
                width: 280px;
                height: 280px;
            }

            .machine {
                width: 175px;
                height: 175px;
            }

            .machine-inner {
                width: 115px;
                height: 115px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>

        <div class="logo">
            🫧 LaundryKu
        </div>

        <div class="menu">

            <a href="#home">
                Home
            </a>

            <a href="#layanan">
                Layanan
            </a>

            <a href="#tentang">
                Tentang
            </a>

            <a href="#kontak">
                Kontak
            </a>

            <!-- INI MENUJU LOGIN -->
            <a href="login_page.php" class="login">
                Login
            </a>

        </div>

    </nav>


    <!-- HERO -->
    <section class="hero" id="home">

        <div class="hero-text">

            <div class="badge">
                ✨ Laundry Bersih & Wangi
            </div>

            <h1>
                Cucian Bersih,
                <br>
                <span>Hidup Lebih Santai.</span>
            </h1>

            <p>
                Selamat datang di LaundryKu.
                Solusi laundry praktis untuk membantu
                kamu mendapatkan pakaian bersih, wangi,
                dan nyaman tanpa harus repot mencuci sendiri.
            </p>

            <a href="login_page.php" class="btn">
                Mulai Sekarang →
            </a>

        </div>


        <div class="visual">

            <div class="circle">

                <div class="machine">

                    <div class="machine-inner">
                        🧺
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- LAYANAN -->
    <section class="services" id="layanan">

        <div class="title">

            <h2>
                Layanan Kami
            </h2>

            <p>
                Berbagai layanan laundry untuk kebutuhanmu.
            </p>

        </div>


        <div class="cards">

            <div class="card">

                <div class="icon">
                    👕
                </div>

                <h3>
                    Laundry Kiloan
                </h3>

                <p>
                    Cocok untuk pakaian sehari-hari
                    dengan proses pencucian bersih
                    dan wangi.
                </p>

            </div>


            <div class="card">

                <div class="icon">
                    👔
                </div>

                <h3>
                    Laundry Satuan
                </h3>

                <p>
                    Perawatan khusus untuk pakaian
                    tertentu agar tetap terjaga.
                </p>

            </div>


            <div class="card">

                <div class="icon">
                    🛏️
                </div>

                <h3>
                    Bed Cover
                </h3>

                <p>
                    Membersihkan bed cover dan
                    perlengkapan tidur agar kembali segar.
                </p>

            </div>

        </div>

    </section>


    <!-- TENTANG -->
    <section id="tentang">

        <div class="title">

            <h2>
                Tentang LaundryKu
            </h2>

            <p>
                Kami hadir untuk membuat urusan laundry
                menjadi lebih mudah dan praktis.
            </p>

        </div>

    </section>


    <!-- CTA -->
    <section class="cta" id="kontak">

        <div class="cta-box">

            <h2>
                Siap Menggunakan LaundryKu?
            </h2>

            <p>
                Login sekarang untuk mulai menggunakan
                sistem informasi laundry.
            </p>

            <!-- MENUJU LOGIN -->
            <a href="login_page.php" class="btn">
                Login Sekarang →
            </a>

        </div>

    </section>


    <!-- FOOTER -->
    <footer>

        <h3>
            🫧 LaundryKu
        </h3>

        <br>

        <p>
            © 2026 Sistem Informasi Laundry
        </p>

    </footer>

</body>
</html>