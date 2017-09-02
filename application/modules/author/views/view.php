<div class="text-center section-title">
    <h1>Author: <?= $author['name'] ?></h1>
    <p class="lead">
        Profile of author.
    </p>
</div>
<div class="row">
    <div class="col-xl-6 col-lg-8 ml-auto mr-auto">
        <form>
            <div class="form-group row">
                <label for="name" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                    <input readonly class="form-control-plaintext" id="name" value="<?= $author['name'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label">Username</label>
                <div class="col-sm-8">
                    <input readonly class="form-control-plaintext" id="username" value="<?= $author['username'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label">Email</label>
                <div class="col-sm-8">
                    <input readonly class="form-control-plaintext" id="email" value="<?= $author['email'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="created_at" class="col-sm-4 col-form-label">Created At</label>
                <div class="col-sm-8">
                    <input readonly class="form-control-plaintext" id="created_at"
                           value="<?= (new DateTime($author['created_at']))->format('M d, Y h:i a') ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Status</label>
                <div class="col-sm-8">
                    <input readonly class="form-control-plaintext" id="status" value="<?= $author['status'] ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="status" class="col-sm-4 col-form-label">Article</label>
                <div class="col-sm-8">
                    <a href="<?= site_url('author/article/' . $author['username']) ?>" class="btn btn-sm btn-outline-primary">View Articles</a>
                </div>
            </div>
        </form>
        <a href="<?= site_url('author') ?>" class="btn btn-primary">Back to List</a>
    </div>
</div>