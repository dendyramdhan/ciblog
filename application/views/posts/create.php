<?= validation_errors(); ?>

<?= form_open_multipart('posts/create'); ?>
  <fieldset>
    <legend><?= $title; ?></legend>  
    <div class="form-group">
      <label class="col-form-label" for="title">Title</label>
      <input name="title" type="text" class="form-control" placeholder="Add Title" id="title">
    </div>
    <div class="form-group">
      <label class="col-form-label" for="body">Body</label>
      <textarea id='editor1' name="body" class="form-control" id="body" rows="3" placeholder="Add Body"></textarea>
    </div>
    <div class="form-group">
      <label for="category" class="col-form-label">Category</label>
      <select name="category_id" class="form-control">
        <?php foreach ($categories as $category) : ?>
          <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <label for="image" class="col-form-label">Upload Image</label>
      <input type="file" name="postimage" class="form-control-file" size="20">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>