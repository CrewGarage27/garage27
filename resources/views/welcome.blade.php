<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Garage 27</title>

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
            font-family: Arial, Helvetica, sans-serif;
            background: #080808;
            color: #e8e5de;
            overflow: hidden;
            margin: 0;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            padding: 0 6%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
        }

        .logo {
            color: #e8e5de;
            text-decoration: none;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 3px;
            cursor: pointer;
        }

        .menu-btn {
            width: 35px;
            height: 35px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .menu-btn span {
            width: 4px;
            height: 4px;
            background: #e8e5de;
            border-radius: 50%;
            display: block;
        }


        /* =========================
           PAGE SYSTEM
        ========================= */

.page {
    display: none;
    width: 100%;
    min-height: 100vh;
    height: 100vh;
    overflow-y: auto;
    overflow-x: hidden;
}

.page.active {
    display: block;
}


        /* =========================
           HERO / HOME
        ========================= */

.hero {
    min-height: 100vh;
    height: 100vh;
    padding: 0 8%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    overflow: hidden;
    background: #0e0101
}

.hero-content {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    transform: translateY(35px);
}

.hero-content .garage {
    font-size: 12px;
    letter-spacing: 5px;
    color: #77736c;
    margin-bottom: 25px;
}

.hero-content h1 {
    font-size: clamp(80px, 15vw, 190px);
    line-height: 0.8;
    letter-spacing: -10px;
    font-weight: 700;
}

.hero-content h1 span {
    color: #77736c;
}

.hero-content .established {
    margin-top: 35px;
    font-size: 9px;
    letter-spacing: 4px;
    color: #555;
}

.hero-content .motto {
    margin-top: 45px;
    font-size: 10px;
    letter-spacing: 4px;
    color: #999;
}


        /* =========================
           ABOUT
        ========================= */

        .about-section {
            min-height: 100vh;
            position: relative;
            padding: 120px 10% 80px;
            background: #0b0b0b;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        .about-number {
            position: absolute;
            top: 90px;
            right: 8%;
            font-size: 10px;
            letter-spacing: 4px;
            color: #555;
        }

        .about-content {
            max-width: 850px;
            padding-top: 30px;
        }

        .about-label {
            font-size: 10px;
            letter-spacing: 5px;
            color: #66635e;
            margin-bottom: 30px;
        }

        .about-content h2 {
            font-size: clamp(65px, 10vw, 140px);
            line-height: 0.8;
            letter-spacing: -6px;
            font-weight: 700;
            margin-bottom: 50px;
        }

        .about-content h2 span {
            color: #77736c;
        }

        .about-content p {
            max-width: 650px;
            font-size: 15px;
            line-height: 1.9;
            color: #77736c;
            margin-bottom: 20px;
        }

        .about-content .about-main {
            color: #d0cdc6;
        }

        .about-details {
            display: flex;
            gap: 70px;
            margin-top: 60px;
            padding-top: 25px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .about-details div {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .about-details span {
            font-size: 9px;
            letter-spacing: 3px;
            color: #555;
        }

        .about-details strong {
            font-size: 11px;
            letter-spacing: 2px;
            font-weight: 500;
        }


.contact-area {
    margin-top: 70px;
    padding-top: 0;
    border-top: none;
    text-align: center;
}

.contact-label {
    font-size: 11px;
    letter-spacing: 4px;
    color: #e8e5de;
    margin-bottom: 30px;
    text-align: center;
}

.contact-links {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 45px;
    flex-wrap: wrap;
}

.contact-link {
    color: #e8e5de;
    text-decoration: none;
    font-size: 10px;
    letter-spacing: 3px;
    border-bottom: none;
    padding-bottom: 0;
    transition: 0.3s;
}

.contact-link:hover {
    color: #77736c;
}


        .page-home {
            margin-top: 70px;
        }

        .home-button {
            color: #77736c;
            text-decoration: none;
            font-size: 9px;
            letter-spacing: 3px;
            border-bottom: 1px solid #444;
            padding-bottom: 8px;
            transition: 0.3s;
        }

        .home-button:hover {
            color: #e8e5de;
            border-color: #e8e5de;
        }


        /* =========================
           STRUCTURE
        ========================= */

        .structure-section {
            min-height: 100vh;
            padding: 120px 8% 100px;
            background: #0d0d0d;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        .structure-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 100px;
        }

        .structure-number {
            font-size: 10px;
            letter-spacing: 4px;
            color: #555;
        }

        .structure-intro {
            font-size: clamp(35px, 5vw, 70px);
            font-weight: 300;
            line-height: 0.95;
            letter-spacing: -3px;
            text-align: right;
        }

        .structure-level {
            margin-bottom: 100px;
        }

        .level-label {
            font-size: 10px;
            letter-spacing: 4px;
            color: #666;
            margin-bottom: 25px;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding-bottom: 15px;
        }

        .structure-card {
            border: 1px solid rgba(255,255,255,0.1);
            background: #111;
            transition: 0.3s;
        }

        .structure-card:hover {
            border-color: rgba(255,255,255,0.3);
            transform: translateY(-5px);
        }

        .founder-level {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .founder-level .level-label {
            width: 100%;
        }

        .founder-card {
            width: 300px;
        }

        .photo-placeholder {
            height: 330px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg,#181818,#080808);
            color: #444;
            font-size: 9px;
            letter-spacing: 3px;
        }

        .card-info {
            padding: 20px;
        }

        .card-role {
            font-size: 9px;
            letter-spacing: 3px;
            color: #555;
            margin-bottom: 8px;
        }

        .card-name {
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 500;
        }

        .card-number {
            margin-top: 15px;
            font-size: 8px;
            letter-spacing: 2px;
            color: #444;
        }

        .structure-grid {
            display: grid;
            gap: 25px;
        }

        .cofounder-grid {
            grid-template-columns: repeat(2, 300px);
            justify-content: center;
        }

.core-grid {
    display: flex;
    flex-wrap: nowrap;
    gap: 25px;
    overflow-x: auto;
    overflow-y: hidden;
    width: 100%;
    padding: 10px 5px 25px;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
}

.core-grid .structure-card {
    flex: 0 0 280px;
    width: 280px;
}

/* Hilangkan scrollbar */
.core-grid::-webkit-scrollbar {
    display: none;
}

.core-grid {
    scrollbar-width: none;
}

        .core-grid .photo-placeholder {
            height: 240px;
        }

        .core-grid .card-name {
            font-size: 16px;
        }


        /* =========================
           GEN 1
        ========================= */

        .gen1-section {
            min-height: 100vh;
            padding: 120px 8%;
            background: #080808;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        .gen1-top {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 80px;
        }

        .gen1-number {
            font-size: 10px;
            letter-spacing: 4px;
            color: #555;
        }

        .gen1-title {
            font-size: clamp(40px, 6vw, 80px);
            line-height: 0.9;
            letter-spacing: -4px;
            text-align: right;
        }

        .gen1-intro {
            border-top: 1px solid rgba(255,255,255,0.1);
            border-bottom: 1px solid rgba(255,255,255,0.1);
            padding: 25px 0;
            margin-bottom: 100px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .gen1-intro p {
            font-size: 11px;
            letter-spacing: 3px;
            margin: 0;
        }

        .gen1-intro span {
            font-size: 9px;
            letter-spacing: 2px;
            color: #555;
        }

        .gen1-group {
            margin-bottom: 100px;
        }

        .group-label {
            font-size: 9px;
            letter-spacing: 4px;
            color: #555;
            margin-bottom: 20px;
        }

        .group-photo {
            width: 500px;
            max-width: 100%;
            height: auto;
            min-height: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #101010;
            border: 1px solid rgba(255,255,255,0.1);
            overflow: hidden;
        }

        .group-photo img {
            width: 100%;
            height: auto;
            object-fit: contain;
            display: block;
        }

        .group-info {
            width: 500px;
            max-width: 100%;
            display: flex;
            justify-content: space-between;
            padding-top: 20px;
        }

        .group-info span {
            font-size: 9px;
            letter-spacing: 3px;
            color: #555;
        }

        .group-info strong {
            font-size: 11px;
            letter-spacing: 2px;
            font-weight: 500;
        }


        /* =========================
           FOOTER
        ========================= */

        .site-footer {
            padding: 100px 8% 40px;
            background: #050505;
            border-top: 1px solid rgba(255,255,255,0.08);
        }

        .footer-logo {
            font-size: clamp(100px, 18vw, 250px);
            font-weight: 700;
            letter-spacing: -12px;
            line-height: 0.8;
        }

        .footer-line {
            margin-top: 80px;
            margin-bottom: 25px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            font-size: 9px;
            letter-spacing: 3px;
            color: #555;
        }


        /* =========================
           MENU
        ========================= */

        .menu-overlay {
            position: fixed;
            inset: 0;
            background: rgba(5,5,5,0.98);
            z-index: 2000;
            display: flex;
            align-items: center;
            padding: 60px 10%;
            transform: translateX(100%);
            transition: transform 0.5s ease;
        }

        .menu-overlay.active {
            transform: translateX(0);
        }

        .menu-close {
            position: absolute;
            top: 35px;
            right: 55px;
            border: none;
            background: none;
            color: #e8e5de;
            font-size: 12px;
            letter-spacing: 3px;
            cursor: pointer;
        }

        .menu-list {
            list-style: none;
        }

        .menu-list li {
            margin: 22px 0;
        }

        .menu-list a {
            color: #e8e5de;
            text-decoration: none;
            font-size: clamp(35px, 5vw, 70px);
            font-weight: 300;
            letter-spacing: -2px;
            transition: 0.3s;
        }

        .menu-list a:hover {
            color: #77736c;
            padding-left: 15px;
        }

        .menu-number {
            font-size: 10px;
            letter-spacing: 2px;
            color: #66635e;
            margin-right: 20px;
            vertical-align: middle;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 768px) {

            .navbar {
                height: 64px;
                padding: 0 6%;
            }

            .logo {
                font-size: 15px;
                letter-spacing: 2px;
            }

            .hero {
                min-height: 100svh;
                padding: 0 6%;
            }

            .hero-content .garage {
                font-size: 9px;
                letter-spacing: 3px;
                margin-bottom: 18px;
            }

            .hero-content h1 {
                font-size: clamp(65px, 21vw, 95px);
                line-height: 0.85;
                letter-spacing: -5px;
            }

            .hero-content .established {
                margin-top: 25px;
            }

            .hero-content .motto {
                margin-top: 35px;
                font-size: 9px;
            }

            .about-section {
                min-height: 100svh;
                padding: 90px 6% 50px;
            }

            .about-number {
                position: static;
                margin-bottom: 35px;
            }

            .about-content {
                padding-top: 0;
            }

            .about-content h2 {
                font-size: clamp(58px, 19vw, 82px);
                line-height: 0.9;
                letter-spacing: -4px;
                margin-bottom: 30px;
            }

            .about-content p {
                font-size: 13px;
                line-height: 1.75;
            }

            .about-details {
                display: grid;
                grid-template-columns: 1fr;
                gap: 20px;
                margin-top: 40px;
            }

            .contact-area {
                margin-top: 45px;
                padding-top: 25px;
            }

            .contact-links {
                flex-direction: column;
                gap: 20px;
            }

            .page-home {
                margin-top: 55px;
                padding-bottom: 25px;
            }

            .structure-section {
                min-height: 100svh;
                padding: 90px 6% 70px;
            }

            .structure-top {
                display: block;
                margin-bottom: 55px;
            }

            .structure-number {
                margin-bottom: 25px;
            }

            .structure-intro {
                font-size: clamp(36px, 11vw, 58px);
                line-height: 0.95;
                text-align: left;
            }

            .structure-level {
                margin-bottom: 60px;
            }

            .founder-card {
                width: 100%;
                max-width: 330px;
            }

            .cofounder-grid,
            .core-grid {
                grid-template-columns: 1fr;
            }

            .photo-placeholder {
                height: 360px;
            }

            .core-grid .photo-placeholder {
                height: 300px;
            }

            .gen1-section {
                min-height: 100svh;
                padding: 90px 6% 70px;
            }

            .gen1-top {
                display: block;
                margin-bottom: 45px;
            }

            .gen1-number {
                margin-bottom: 25px;
            }

            .gen1-title {
                font-size: clamp(42px, 12vw, 64px);
                line-height: 0.95;
                text-align: left;
            }

            .gen1-intro {
                display: block;
                padding: 15px 0;
                margin-bottom: 55px;
            }

            .gen1-intro p {
                margin-bottom: 10px;
                font-size: 13px;
                line-height: 1.7;
            }

            .gen1-group {
                margin-bottom: 60px;
            }

            .group-photo {
                width: 100%;
                height: auto;
                min-height: 0;
            }

            .group-photo img {
                width: 100%;
                height: auto;
                max-height: none;
                object-fit: contain;
            }

            .group-info {
                width: 100%;
                display: block;
                padding-top: 15px;
            }

            .group-info span {
                display: block;
                margin-bottom: 7px;
            }

            .site-footer {
                padding: 70px 6% 30px;
            }

            .footer-logo {
                font-size: clamp(75px, 25vw, 130px);
                letter-spacing: -6px;
            }

            .footer-bottom {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }

            .menu-overlay {
                padding: 90px 6% 35px;
            }

            .menu-list a {
                font-size: clamp(32px, 9vw, 50px);
                line-height: 1.1;
            }

            .menu-close {
                top: 22px;
                right: 6%;
            }
        }

    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

        <a href="#home"
           class="logo"
           onclick="showPage('home')">
            G27
        </a>

        <button class="menu-btn"
                onclick="openMenu()"
                aria-label="Open menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </nav>


    <!-- =========================
         HOME
    ========================= -->

    <section class="hero page active" id="home">

        <div class="hero-content">

            <div class="garage">
                GARAGE 27
            </div>

            <h1>
                G<span>27</span>
            </h1>

            <div class="established">
                EST. 2026
            </div>

            <div class="motto">
                BOUND BY LOYALTY
            </div>

        </div>

    </section>


    <!-- =========================
         ABOUT
    ========================= -->

    <section class="about-section page" id="about">

        <div class="about-number">
            02 / ABOUT G27
        </div>

        <div class="about-content">

            <h2>
                GARAGE<br>
                <span>27</span>
            </h2>

            <p class="about-main">
                Garage 27 is a roleplay collective established in 2026.
                More than just a name, G27 is built through friendship,
                memories, and loyalty.
            </p>

            <p>
                Different characters. Different stories. One brotherhood.
            </p>

            <div class="about-details">

                <div>
                    <span>ESTABLISHED</span>
                    <strong>2026</strong>
                </div>

                <div>
                    <span>IDENTITY</span>
                    <strong>G27 CREW</strong>
                </div>

                <div>
                    <span>MOTTO</span>
                    <strong>BOUND BY LOYALTY</strong>
                </div>

            </div>


            <!-- CONTACT -->

            <div class="contact-area">

                <div class="contact-label">
                    ENTER THE GARAGE
                </div>

                <div class="contact-links">

                    <a href="https://wa.me/6281949077382"
                       class="contact-link"
                       target="_blank">
                        CONTACT 01 
                    </a>


                </div>

            </div>

        </div>


        <div class="page-home">

            <a href="#home"
               class="home-button"
               onclick="showPage('home')">
                HOME ↑
            </a>

        </div>

    </section>


    <!-- =========================
         STRUCTURE
    ========================= -->

    <section class="structure-section page" id="structure">

        <div class="structure-top">

            <div class="structure-number">
                03 / STRUCTURE
            </div>

            <div class="structure-intro">
                THE PEOPLE<br>
                BEHIND G27
            </div>

        </div>


        <!-- FOUNDER -->

        <div class="structure-level founder-level">

            <div class="level-label">
                FOUNDER
            </div>

            <div class="structure-card founder-card">

                <div class="photo-placeholder">
                    FOUNDER PHOTO
                </div>

                <div class="card-info">

                    <div class="card-role">
                        FOUNDER
                    </div>

                    <div class="card-name">
                        YOUR NAME
                    </div>

                    <div class="card-number">
                        G27 / 001
                    </div>

                </div>

            </div>

        </div>


        <!-- CO FOUNDERS -->

        <div class="structure-level">

            <div class="level-label">
                CO-FOUNDERS
            </div>

            <div class="structure-grid cofounder-grid">

                <div class="structure-card">

                    <div class="photo-placeholder">
                        CO-FO 01
                    </div>

                    <div class="card-info">

                        <div class="card-role">
                            CO-FOUNDER
                        </div>

                        <div class="card-name">
                            NAME
                        </div>

                        <div class="card-number">
                            G27 / 002
                        </div>

                    </div>

                </div>


                <div class="structure-card">

                    <div class="photo-placeholder">
                        CO-FO 02
                    </div>

                    <div class="card-info">

                        <div class="card-role">
                            CO-FOUNDER
                        </div>

                        <div class="card-name">
                            NAME
                        </div>

                        <div class="card-number">
                            G27 / 003
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <!-- CORE MEMBERS -->

        <div class="structure-level">

            <div class="level-label">
                CORE MEMBERS
            </div>

            <div class="structure-grid core-grid">

                <div class="structure-card">
                    <div class="photo-placeholder">MEMBER 01</div>
                    <div class="card-info">
                        <div class="card-role">CORE MEMBER</div>
                        <div class="card-name">NAME</div>
                    </div>
                </div>

                <div class="structure-card">
                    <div class="photo-placeholder">MEMBER 02</div>
                    <div class="card-info">
                        <div class="card-role">CORE MEMBER</div>
                        <div class="card-name">NAME</div>
                    </div>
                </div>

                <div class="structure-card">
                    <div class="photo-placeholder">MEMBER 03</div>
                    <div class="card-info">
                        <div class="card-role">CORE MEMBER</div>
                        <div class="card-name">NAME</div>
                    </div>
                </div>

                <div class="structure-card">
                    <div class="photo-placeholder">MEMBER 04</div>
                    <div class="card-info">
                        <div class="card-role">CORE MEMBER</div>
                        <div class="card-name">NAME</div>
                    </div>
                </div>

            </div>

        </div>


        <div class="page-home">

            <a href="#home"
               class="home-button"
               onclick="showPage('home')">
                HOME ↑
            </a>

        </div>

    </section>


    <!-- =========================
         GEN 1
         HIDDEN FOR NOW
    ========================= -->

    <section class="gen1-section page" id="gen1">

        <!-- GEN 1 CONTENT WILL STAY HERE
             BUT IS NOT SHOWN IN THE MENU YET -->

        <div class="gen1-top">

            <div class="gen1-number">
                04 / GEN 1
            </div>

            <div class="gen1-title">
                THE FIRST<br>
                GENERATION
            </div>

        </div>

        <div class="gen1-intro">

            <p>
                THE BEGINNING OF GARAGE 27.
            </p>

            <span>
                ONE GENERATION. ONE STORY. ONE BROTHERHOOD.
            </span>

        </div>

        <div class="gen1-group">

            <div class="group-label">
                DORM 01
            </div>

            <div class="group-photo">
                <img src="{{ asset('images/dorm01.jpg') }}" alt="Dorm 01">
            </div>

            <div class="group-info">
                <span>GEN 01</span>
                <strong>THE FIRST CREW</strong>
            </div>

        </div>

        <div class="gen1-group">

            <div class="group-label">
                DORM 02
            </div>

            <div class="group-photo">
                <img src="{{ asset('images/dorm02.jpg') }}" alt="Dorm 02">
            </div>

            <div class="group-info">
                <span>GEN 01</span>
                <strong>THE SECOND CREW</strong>
            </div>

        </div>

        <div class="gen1-group">

            <div class="group-label">
                DORM 03
            </div>

            <div class="group-photo">
                <img src="{{ asset('images/dorm03.jpg') }}" alt="Dorm 03">
            </div>

            <div class="group-info">
                <span>GEN 01</span>
                <strong>THE THIRD CREW</strong>
            </div>

        </div>

        <div class="page-home">

            <a href="#home"
               class="home-button"
               onclick="showPage('home')">
                HOME ↑
            </a>

        </div>

    </section>


    <!-- FOOTER -->

    <footer class="site-footer">

        <div class="footer-logo">
            G27
        </div>

        <div class="footer-line"></div>

        <div class="footer-bottom">

            <span>
                GARAGE 27
            </span>

            <span>
                EST. 2026
            </span>

            <span>
                BOUND BY LOYALTY
            </span>

        </div>

    </footer>


    <!-- MENU OVERLAY -->

    <div class="menu-overlay" id="menuOverlay">

        <button class="menu-close" onclick="closeMenu()">
            CLOSE ×
        </button>

        <ul class="menu-list">

            <li>
                <a href="#home"
                   onclick="showPage('home')">
                    <span class="menu-number">01</span>
                    HOME
                </a>
            </li>

            <li>
                <a href="#about"
                   onclick="showPage('about')">
                    <span class="menu-number">02</span>
                    ABOUT G27
                </a>
            </li>

            <li>
                <!--
                <a href="#structure"
                   onclick="showPage('structure')">
                    <span class="menu-number">03</span>
                    STRUCTURE
                </a>
                -->
            </li>

        </ul>

    </div>


    <!-- JAVASCRIPT -->

    <script>

        function openMenu() {
            document
                .getElementById("menuOverlay")
                .classList.add("active");
        }

        function closeMenu() {
            document
                .getElementById("menuOverlay")
                .classList.remove("active");
        }

        function showPage(pageId) {

            document.querySelectorAll(".page").forEach(function(page) {
                page.classList.remove("active");
            });

            document
                .getElementById(pageId)
                .classList.add("active");

            closeMenu();
        }

    </script>

</body>
</html>