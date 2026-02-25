<?= $this->extend('admin/admin_layout') ?>


<?= $this->section('page_title') ?>
   <?=$title?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
    <form action="/gallery/uploadphoto" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" id="file">
        <button type="submit">Ielādēt</button>
    </form>


<?= $this->endSection() ?>

