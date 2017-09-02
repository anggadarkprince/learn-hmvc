<div class="text-center section-title">
    <h1><?= $title ?></h1>
    <p class="lead">
        Blog post of articles.
    </p>
</div>

<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th style="max-width: 15px">#</th>
        <th style="min-width: 200px">Title</th>
        <th>Content</th>
        <th>Author</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    <?php $no = 1;
    foreach ($articles as $article): ?>
        <tr>
            <th><?= $no++ ?></th>
            <td>
                <a href="<?= site_url('article/' . $article['slug']) ?>">
                    <?= $article['title'] ?>
                </a>
            </td>
            <td><?= trim(substr(strip_tags($article['content']), 0, 200)) ?>...</td>
            <td><?= $article['author_name'] ?></td>
            <td><?= (new DateTime($article['created_at']))->format('M d, Y h:i a') ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>