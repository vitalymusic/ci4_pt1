<?= $this->extend('admin/admin_layout') ?>

<?= $this->section('page_title') ?>
   <?=$title?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<p> <?=$content?></p>
<?= $this->endSection() ?>
