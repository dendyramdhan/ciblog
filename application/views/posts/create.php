<?= validation_errors(); ?>

<?= form_open('posts/create'); ?>
  <fieldset>
    <legend><?= $title; ?></legend>  
    <div class="form-group">
      <label class="col-form-label" for="title">Title</label>
      <input name="title" type="text" class="form-control" placeholder="Add Title" id="title">
    </div>
    <div class="form-group">
      <label class="col-form-label" for="body">Body</label>
      <textarea name="body" class="form-control" id="body" rows="3" placeholder="Add Body"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>