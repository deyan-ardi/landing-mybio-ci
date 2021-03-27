<?= $this->extend('master'); ?>
<?= $this->section('main'); ?>
<!-- Main Content Starts -->
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none"
                    alt="my picture" />
                <h6 class="text-uppercase open-sans-font mb-0 d-block d-sm-none d-lg-block">hi there !</h6>
                <h1 class="text-uppercase poppins-font"><span>I'm</span> Deyan Ardi</h1>
                <p class="open-sans-font text-justify">I am a website application developer based in the city of
                    Singaraja which
                    focuses on the security and convenience of the application and manages all the flow of the website
                    algorithm (Back End Developer), my hobbies are playing music and playing with algorithms. I am
                    passionate
                    about building excellent software that improves the
                    lives of those around me.</p>
                <a href="<?= base_url(); ?>/about" class="btn btn-about">more about me</a>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
<!-- Main Content Ends -->