<div class="text-center section-title">
    <h1><?= $title ?></h1>
    <p class="lead">
        Posted by <strong><?= $article['author_name'] ?></strong> at
        <?= (new DateTime($article['created_at']))->format('M d, Y h:i a') ?>.
    </p>
</div>

<p>
    <?= $article['content'] ?>
</p>
<a href="<?= site_url('author') ?>" class="btn btn-primary">Back to List</a>