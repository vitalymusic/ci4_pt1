<?= $this->extend('main_layout') ?>

<?= $this->section('page_title') ?>

  <?= (isset($user_id) && $user_id !== 0)
    ? "Lietotājs ar id {$user_id}"
    : "Lietotāji"; ?>

<?= $this->endSection() ?>


<?= $this->section('content') ?>

<p>Te būs lietotāji</p>
<?= $this->endSection() ?>