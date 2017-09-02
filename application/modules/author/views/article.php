<div class="text-center section-title">
    <h1>Author: <?= $author['name'] ?></h1>
    <p class="lead">
        Articles was created by this author.
    </p>
    <a href="<?= site_url('author') ?>" class="btn btn-primary">Back to List</a>
</div>

<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th style="max-width: 15px">#</th>
        <th style="min-width: 200px">Title</th>
        <th>Content</th>
        <th>Created At</th>
    </tr>
    </thead>
    <tbody>
    <?php $no = 1;
    foreach ($articles as $article): ?>
        <tr>
            <th><?= $no++ ?></th>
            <td>
                <a href="<?= site_url('article/view/' . $article['slug']) ?>">
                    <?= $article['title'] ?>
                </a>
            </td>
            <td><?= trim(substr(strip_tags($article['content']), 0, 200)) ?>...</td>
            <td><?= (new DateTime($article['created_at']))->format('M d, Y h:i a') ?></td>
        </tr>
    <?php endforeach; ?>
    <?php if(empty($articles)): ?>
        <tr class="text-center">
            <td colspan="4">No article was created by this user</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>