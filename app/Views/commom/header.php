<script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
<title>Photography Site</title>
<style>
    .header {
        min-height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("images/header.jpg") center/cover no-repeat;
        color: #fff;
    }
</style>

<!-- header -->
<header class="header">
    <div class="nav-section">
        <div class="brand-and-navBtn">
            <span class="brand-name" style="font-weight: bold;">
                SARAHLAB
            </span>
            <span class="navBtn flex">
                <i class="fas fa-bars"></i>
            </span>
        </div>
        <!-- navigation menu -->
        <nav class="top-nav">
            <ul>
                <li><a href=<?php echo base_url('') ?>>Home</a></li>
                <li><a href=<?php echo base_url('portfolio') ?>>Portfolio</a></li>
                <li><a href=<?php echo base_url('contato') ?>>Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="container about" style="padding-top:15px;">

        <div class="about-content">
            <div class="about-img flex">
                <img src=<?= base_url('images/about-img.jpg') ?> alt="photographer img">
            </div>
            <h2>Sarah Doe</h2>
            <h3>Photographer</h3>
        </div>

        <div class="social-icons">
            <br>
            <br>
            <br>
            <br>
            <ul>
                <li>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </li>
            </ul>
        </div>
    </div>
</header>

<script src="js/script.js"></script>