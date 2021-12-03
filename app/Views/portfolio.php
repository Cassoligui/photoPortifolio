<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">

<style>
    .header {
        min-height: 100vh;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url("images/header.jpg") center/cover no-repeat;
        color: #fff;
    }
</style>
<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('simplelightbox-master/dist/simple-lightbox.css'); ?>">

<body>
    <?php echo view('commom/header'); ?>
</body>
<!-- main -->
<section class="section-three">
    <div class="container">
        <div class="gallery">
            <a href="images/gallery1.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery1.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery2.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery2.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery3.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery3.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery4.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery4.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery5.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery5.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery6.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery6.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery7.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery7.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery8.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery8.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>

            <a href="images/gallery9.jpg">
                <div class="single-img">
                    <img src=<?= base_url('images/gallery9.jpg') ?> alt="gallery image">
                    <div class="single-img-content">
                        <h3>Beautiful Work</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- end of main -->

<footer><?php echo view('commom/footer'); ?></footer>

</html>
<script src="js/script.js"></script>
<script src="js/simple-lightbox.js"></script>


<script>
   var lightbox = new SimpleLightbox('.gallery a', { /* options */ });
</script>