<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Learn Hierarchical Model View Controller for Codeigniter">
    <meta name="author" content="Angga Ari Wijaya">
    <title>HMVC - <?= isset($title) ? $title : 'Page' ?></title>
    <link href="<?= base_url('assets/lib/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/app/css/style.css') ?>" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">HMVC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars"
            aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbars">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?= $this->uri->segment(1) != '' ?: 'active' ?>">
                <a class="nav-link" href="<?= site_url() ?>">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) != 'article' ?: 'active' ?>">
                <a class="nav-link" href="<?= site_url('article') ?>">Articles</a>
            </li>
            <li class="nav-item <?= $this->uri->segment(1) != 'author' ?: 'active' ?>">
                <a class="nav-link" href="<?= site_url('author') ?>">Authors</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= site_url('statistic') ?>">Statistic Modules</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">More Page</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="<?= site_url('page/help') ?>">Help</a>
                    <a class="dropdown-item" href="<?= site_url('page/about') ?>">About</a>
                    <a class="dropdown-item" href="<?= site_url('page/contact') ?>">Contact Us</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <?php $this->load->view($page) ?>
    </div>

</div><!-- /.container -->

<script src="<?= base_url('assets/lib/jquery/jquery-3.2.1.min.js') ?>"></script>
<script src="<?= base_url('assets/lib/popper/popper.min.js') ?>"></script>
<script src="<?= base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>
