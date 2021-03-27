<?= $this->extend('master'); ?>
<?= $this->section('main'); ?>
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>get in <span>touch</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new
                    projects, creative ideas or opportunities to be part of your visions.</p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="instagram"><a title="Instagram" href="https://www.instagram.com/de_yan_/"><i
                                class="fa fa-instagram"></i></a>
                    </li>
                    <li class="github"><a title="Github" href="https://github.com/deyan-ardi"><i
                                class="fa fa-github"></i></a>
                    </li>
                    <li class="linkedin"><a title="Linkedin" href="https://www.linkedin.com/in/deyan-ardi-4070691b0/"><i
                                class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="whatsapp"><a title="Whatsapp" href="https://api.whatsapp.com/send?phone=6281915656865"><i
                                class="fa fa-whatsapp"></i></a>
                    </li>
                    <li class="telegram"><a title="Telegram" href="https://t.me/De_Yan"><i
                                class="fa fa-telegram"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Left Side Ends -->
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <?php if (session()->getFlashdata('berhasil')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('berhasil'); ?>
                </div>
                <?php elseif (session()->getFlashdata('gagal')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session()->getFlashdata('gagal'); ?>
                </div>
                <?php endif; ?>
                <form class="contactform" method="POST" action="">
                    <div class="contactform">
                        <?= csrf_field() ?>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" class="is-invalid" value="<?= old('name'); ?>"
                                    placeholder="YOUR NAME" required>
                                <p class="text-danger">
                                    <?= $validation->hasError('name') ? $validation->getError('name') : ""; ?>
                                </p>
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" value="<?= old('email'); ?>" placeholder="YOUR EMAIL"
                                    required>
                                <p class="text-danger">
                                    <?= $validation->hasError('email') ? $validation->getError('email') : ""; ?>
                                </p>
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" value="<?= old('subject'); ?>"
                                    placeholder="YOUR SUBJECT" required>
                                <p class="text-danger">
                                    <?= $validation->hasError('subject') ? $validation->getError('subject') : ""; ?>
                                </p>
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="YOUR MESSAGE"
                                    required><?= old('subject'); ?></textarea>
                                <p class="text-danger">
                                    <?= $validation->hasError('message') ? $validation->getError('message') : ""; ?>
                                </p>
                                <button type="submit" name="submit" value="Submit" class="btn btn-contact">Send
                                    Message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>
<?= $this->endSection(); ?>