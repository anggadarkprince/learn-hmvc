<div class="text-center section-title">
    <h1><?= $title ?></h1>
    <p class="lead">
        The creator of article or blog post.
    </p>
</div>

<table class="table table-hover table-responsive">
    <thead>
    <tr>
        <th style="max-width: 15px">#</th>
        <th>Name</th>
        <th>Username</th>
        <th>Email</th>
        <th>Total Article</th>
        <th>Registered At</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php $no = 1;
    foreach ($authors as $author): ?>
        <tr>
            <th><?= $no++ ?></th>
            <td>
                <a href="<?= site_url('author/view/' . $author['username']) ?>">
                    <?= $author['name'] ?>
                </a>
            </td>
            <td><?= $author['username'] ?></td>
            <td><?= $author['email'] ?></td>
            <td>
                <a href="<?= site_url('author/article/' . $author['username']) ?>">
                    <?= $author['total_article'] ?> items
                </a>
            </td>
            <td><?= (new DateTime($author['created_at']))->format('M d, Y h:i a') ?></td>
            <td><?= $author['status'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>