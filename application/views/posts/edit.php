<?= validation_errors(); ?>

<?php $hidden = ['id' => $post['id']]; ?>
<?= form_open('posts/update', '', $hidden); ?>
  <fieldset>
    <legend><?= $title; ?></legend>  
    <div class="form-group">
      <label class="col-form-label" for="title">Title</label>
      <input name="title" type="text" class="form-control" placeholder="Add Title" id="title" value="<?= $post['title']; ?>">
    </div>
    <div class="form-group">
      <label class="col-form-label" for="body">Body</label>
      <textarea id='editor1' name="body" class="form-control" id="body" rows="3" placeholder="Add Body"><?= $post['body']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>