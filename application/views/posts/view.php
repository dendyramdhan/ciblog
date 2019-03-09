<h3><?= $post['title']; ?></h3>
<small class="post-date">Posted on: <?= $post['created_at']; ?></small><br>
<div class="post-body">
    <?= $post['body']; ?>
</div>
<hr>
<a class="btn btn-primary" href="<?= base_url('posts/edit/'.$post['slug']); ?>">Edit</a>
<?= form_open('posts/delete/'.$post['id'], 'id="form-delete"'); ?>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
