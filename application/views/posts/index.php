<h2><?= $title; ?></h2>
<?php foreach($posts as $post) : ?>
    <h3><?= $post['title']; ?></h3>
    <small class="post-date">Posted on: <?= $post['created_at']; ?> in <strong><?= $post['name']; ?></strong></small><br>
    <?= word_limiter($post['body'], 60); ?>
    <br><br>
    <p><a class="btn btn-primary" href="<?= site_url('posts/'.$post['slug']); ?>">Read More</a></p>
<?php endforeach; ?>