<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/asset/css/style.css" />
    <title>Portfolio Celine</title>
    <script src="/asset/javascript/main.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <header class="header" id="header">
        <a href="#" class="logo">
            <img src="/asset/img/logo.png" width="110">
        </a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#aboutme">About Me</a>
            <a href="#experiences">Experiences</a>
            <a href="#projects">Projects</a>
            <a href="#skills">Skills</a>
            <a href="#contact">Contact</a>
            <span class="active-nav"></span>
            <span class="animate" style="--i:1;"></span>
        </nav>

        <div class="celineMenu bx bx-menu" id="celine-menu">
            <span class="animate" style="--i:1;"></span>
        </div>
    </header>

    <section class="home show-animate" id="home">
        <div class="home-image">
            <img src="/asset/img/me.png" alt="">
        </div>
        <div class="home-content">
            <h3>IT'S TIME TO FIND OUT ABOUT ME <span class="animate" style="--i:2;"></span></h3>
            <h1 class="nama">CELINE <span>AURIEL</span><span class="animate" style="--i:3;"></span></h1>
            <p>
                An Information Systems student eager to learn about information technology. Focused on
                developing technical skills and ready to embark on a professional journey in IT.
                <span class="animate" style="--i:4;"></span>
            </p>
            <br> <br>
            <a href="/asset/pdf/5026221004_Celine Auriel_CV.pdf" download="CV Celine" class="btns">Download CV<span
                    class="animate" style="--i:6;"></span></a>
        </div>
    </section>

    <section class="aboutme" id="aboutme">
        <h2 class="heading">About <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="about-img">
            <img src="/asset/img/about me.png" width="100">
            <span class="circle-spin"></span><span class="animate scroll" style="--i:2;"></span>
        </div>

        <div class="about-content">
            <h3>Information System Student!<span class="animate scroll" style="--i:3;"></span></h3>
            <p>Hi! Let me introduce myself, my name is Celine Auriel. People usually call me Celine. I am currently in
                my 3rd semester of college. I study at the Sepuluh Nopember Institute of Technology. I majored in
                information systems. This major is a major that I have been very interested in since I was in high
                school. At that time, I was surrounded by people who were good at coding, so I was interested in
                following in their footsteps. I have several experiences which I will explain here. So, come find out
                about me here.<span class="animate scroll" style="--i:4;"></span></p>
        </div>
    </section>

    <section class="experiences" id="experiences">
        <div class="experience-container">
            <span class="experiences-subtitle">Internships, Competitions, & Committees<span class="animate scroll"
                    style="--i:1;"></span></span>
            <h2 class="experience-title">Experiences<span class="animate scroll" style="--i:2;"></span></h2>

            <div class="experiences-container swiper">
                <span class="animate scroll" style="--i:3;"></span>
                <div class="swiper-wrapper">
                    <article class="experiences-card swiper-slide">
                        <img src="/asset/img/e1.jpg" width="100%" alt="" class="experiences-img">

                        <div class="experiences-data">
                            <h2 class="experiences-location">
                                PT. Siix Electronics
                            </h2>
                            <h3 class="experiences-title">
                                Internships Student
                            </h3>
                            <p class="experiences-desc">
                                Menjadi bagian dari repair production, saya me-record setiap barang yang tidak sesuai.
                            </p>
                        </div>
                    </article>

                    <article class="experiences-card swiper-slide">
                        <img src="/asset/img/e2.png" width="100%" alt="" class="experiences-img">

                        <div class="experiences-data">
                            <h2 class="experiences-location">
                                KKS TNI-AD 2021
                            </h2>
                            <h3 class="experiences-title">
                                Lomba Cyber Security
                            </h3>
                            <p class="experiences-desc">
                                Meraih juara 3 dalam kategori pelajar, secara tim sebanyak 2 orang.
                            </p>
                        </div>
                    </article>

                    <article class="experiences-card swiper-slide">
                        <img src="/asset/img/e3.png" width="100%" alt="" class="experiences-img">

                        <div class="experiences-data">
                            <h2 class="experiences-location">
                                Information System Expo 2023!
                            </h2>
                            <h3 class="experiences-title">
                                Panitia RISE!
                            </h3>
                            <p class="experiences-desc">
                                Rivalry of Information System Expo, ajang business case untuk mahasiswa.
                            </p>
                        </div>
                    </article>

                    <article class="experiences-card swiper-slide">
                        <img src="/asset/img/e4.jpg" width="100%" alt="" class="experiences-img">

                        <div class="experiences-data">
                            <h2 class="experiences-location">
                                LKS Nasional 2023
                            </h2>
                            <h3 class="experiences-title">
                                Lomba Cyber Security
                            </h3>
                            <p class="experiences-desc">
                                Ajang perlombaan dari Puspresnas untuk siwa/i SMK di seluruh Indonesia.
                            </p>
                        </div>
                    </article>

                    <article class="experiences-card swiper-slide">
                        <img src="/asset/img/e5.png" width="100%" alt="" class="experiences-img">

                        <div class="experiences-data">
                            <h2 class="experiences-location">
                                HMTI Fair 2021
                            </h2>
                            <h3 class="experiences-title">
                                Lomba Olimpiade Informatika
                            </h3>
                            <p class="experiences-desc">
                                Ajang perlombaan informatika oleh HMTI Politeknik Negeri Batam.
                        </div>
                    </article>
                </div>
                <!-- Button Prev -->
                <div class="swiper-button-prev">
                    <img src="/asset/img/chevron-left-square-regular-24.png">
                </div>
                <!-- Button Next -->
                <div class="swiper-button-next">
                    <img src="/asset/img/chevron-right-square-regular-24.png">
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="heading">Latest <span>Projects</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="projects-container">
            <span class="animate scroll" style="--i:3;"></span>
            <div class="projects-box">
                <img src="/asset/img/p1.png" alt="">
                <div class="projects-layer">
                    <h4>HTML</h4>
                    <p>Project pada pertemuan pertama PWEB</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="/asset/img/p2.png" alt="">
                <div class="projects-layer">
                    <h4>CSS</h4>
                    <p>Project pada pertemuan kedua PWEB</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="/asset/img/p3.png" alt="">
                <div class="projects-layer">
                    <h4>Bootstrap</h4>
                    <p>Project pada pertemuan keempat PWEB</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="/asset/img/p4.png" alt="">
                <div class="projects-layer">
                    <h4>Layout</h4>
                    <p>Project pada pertemuan kelima PWEB</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="/asset/img/p5.png" alt="">
                <div class="projects-layer">
                    <h4>JavaScript</h4>
                    <p>Project pada pertemuan keenam PWEB</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="projects-box">
                <img src="/asset/img/p6.png" alt="">
                <div class="projects-layer">
                    <h4>Form Validation</h4>
                    <p>Project pada pertemuan ketujuh PWEB</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="skills" id="skills">
        <h2 class="skills-heading" class="section-title">Skills<span class="animate scroll" style="--i:1;"></span></h2>
        <div class="skills-container">
            <div class="col-6">
                <img src="/asset/img/skills.png" width="100%"><span class="animate scroll" style="--i:2;"></span>
            </div>
            <div class="col-6">
                <span class="animate scroll" style="--i:3;"></span>
                <!--SKILL 1-->
                <div class="skills-content skills-open">
                    <div class="skills-header">
                        <i class='bx bx-code-curly skills-icon'></i>
                        <div>
                            <h1 class="skills-title">Frontend Developer</h1>
                            <span class="skills-subtitle">Pemrograman Web</span>
                        </div>
                        <i class='bx bx-chevron-down skills-arrow'></i>
                    </div>
                    <div class="skills-list grid">
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">HTML</h3>
                                <span class="skills-number">60%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-html"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">CSS</h3>
                                <span class="skills-number">50%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-css"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">JavaScript</h3>
                                <span class="skills-number">45%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-js"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">React</h3>
                                <span class="skills-number">20%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-react"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--SKILL 2-->
                <div class="skills-content skills-close">
                    <div class="skills-header">
                        <i class='bx bx-server skills-icon'></i>
                        <div>
                            <h1 class="skills-title">Backend Developer</h1>
                            <span class="skills-subtitle">Pemrograman Web</span>
                        </div>
                        <i class='bx bx-chevron-down skills-arrow'></i>
                    </div>
                    <div class="skills-list grid">
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">PHP</h3>
                                <span class="skills-number">50%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-php"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Node JS</h3>
                                <span class="skills-number">50%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-node"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Firebase</h3>
                                <span class="skills-number">45%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-firebase"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Python</h3>
                                <span class="skills-number">80%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-python"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--SKILL 3-->
                <div class="skills-content skills-close">
                    <div class="skills-header">
                        <i class='bx bx-book-alt skills-icon'></i>
                        <div>
                            <h1 class="skills-title">Designer</h1>
                            <span class="skills-subtitle">Pemrograman Web</span>
                        </div>
                        <i class='bx bx-chevron-down skills-arrow'></i>
                    </div>
                    <div class="skills-list grid">
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Figma</h3>
                                <span class="skills-number">70%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-figma"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Sketch</h3>
                                <span class="skills-number">80%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-sketch"></span>
                            </div>
                        </div>
                        <div class="skills-data">
                            <div class="skills-title">
                                <h3 class="skills-name">Photoshop</h3>
                                <span class="skills-number">85%</span>
                            </div>
                            <div class="skills-bar">
                                <span class="skills-percentage skills-ps"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="container">
            <span class="animate scroll" style="--i:1;"></span>
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Let's get in touch</h3>
                    <p class="text">
                        Tak kenal maka tak sayang, maka dari itu ayo kita kenalan lebih lanjut. Dibawah ini tersedia
                        kontak aku yang bisa kamu kunjungi!
                    </p>

                    <div class="info">
                        <div class="information">
                            <i class="fa-solid fa-map-location-dot icon"></i>
                            <p>Surabaya, Indonesia</p>
                        </div>
                        <div class="information">
                            <i class="fa-solid fa-envelope icon"></i>
                            <p>celineauriel@gmail.com</p>
                        </div>
                        <div class="information">
                            <i class="fa-solid fa-phone-volume icon"></i>
                            <p>+62 81266414932</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <p>Connect with Me</p>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/celineauriel.estevany" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/celiineauriiel/" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/ceyinawiel" target="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/celine-auriel-20b644249/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="contact-form">
                    <div class="circle one"></div>
                    <div class="circle two"></div>

                    <form action="#" autocomplete="off" id="contact-form">
                        <h3 class="title">Contact Me</h3>
                        <div class="input-container">
                            <input type="text" name="name" class="input" placeholder="Full Name" />
                            <div class="error-msg" id="name-error"></div>
                        </div>
                        <div class="input-container">
                            <input type="text" name="email" class="input" placeholder="Email" />
                            <div class="error-msg" id="email-error"></div>
                        </div>
                        <div class="input-container">
                            <input type="text" name="email-subject" class="input" placeholder="Email Subjects" />
                            <div class="error-msg" id="email-subject-error"></div>
                        </div>
                        <div class="input-container">
                            <input type="tel" name="phone" class="input" placeholder="Phone Number" />
                            <div class="error-msg" id="phone-error"></div>
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input" placeholder="Message"></textarea>
                            <div class="error-msg" id="message-error"></div>
                        </div>
                        <input type="submit" value="Send" class="btn" />
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-text">
            <p>ETS Pemrograman Web | By Celine Auriel<span class="animate scroll" style="--i:1;"></span></p>

        </div>
        <div class="footer-iconTop">
            <a href="#"><i class="bx bx-up-arrow-alt"></i></a>
            <span class="animate scroll" style="--i:3;"></span>
        </div>
    </footer>

</body>
