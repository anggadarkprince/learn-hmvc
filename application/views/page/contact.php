<div class="text-center">
    <h1><?= $title ?></h1>
    <p class="lead">
        Modular Extensions installation.
    </p>
</div>

<div class="row">
    <div class="col-xl-8 ml-auto mr-auto col-lg-10">
        <?php if(!empty($this->session->flashdata('message'))): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span>&times;</span>
                </button>
                <?= $this->session->flashdata('message') ?>
            </div>
        <?php endif; ?>
        <form action="<?= site_url('page/contact') ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input class="form-control" name="name" id="name" placeholder="Your full name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" cols="30" rows="3" placeholder="Message"></textarea>
            </div>
            <button class="btn btn-outline-primary">Submit Message</button>
        </form>
    </div>
</div>