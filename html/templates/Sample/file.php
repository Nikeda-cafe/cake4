<form method="post" enctype="multipart/form-data" action="/file">
  <div>
    <input type="file" name="my_file">
    <input type="hidden" name="_csrfToken" autocomplete="off" value="<?= $this->request->getAttribute('csrfToken') ?>">
    <button type="submit">アップロード</button>
  </div>
</form>
