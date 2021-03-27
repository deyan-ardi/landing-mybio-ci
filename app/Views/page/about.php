<?= $this->extend('master'); ?>
<?= $this->section('main'); ?>
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>ABOUT <span>ME</span></h1>
    <span class="title-bg">Resume</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <?= $this->include('page/about/personalInfo'); ?>
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <?= $this->include('page/about/boxesInfo'); ?>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <?= $this->include('page/about/skillInfo'); ?>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Internal & Eksternal Education Starts -->
        <?= $this->include('page/about/educationInfo'); ?>
        <!-- Internal & Eksternal Education Ends -->

        <hr class="separator mt-1">
        <!-- Experience & Achievment Starts -->
        <?= $this->include('page/about/experienceInfo'); ?>
        <!-- Experience & Achievment Ends -->
    </div>
</section>
<!-- Main Content Ends -->
<?= $this->endSection(); ?>