<?= $this->extend('admin/admin_layout') ?>

<?= $this->section('page_title') ?>
   <?=$title?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<table class="table table-bordered">
      <tr>

      </tr>   
      <?php foreach($pages as $page): ?>
      
         <tr>
            <td><?=$page["page_name"]?></td>
            <td><?=$page["page_date"]?></td>
            <td>
               <a href="<?=base_url("/admin/editpages/{$page["id"]}")?>" type="button" class="btn btn-primary editBtn">Rediģēt</a>
            </td>
         </tr>

       <?php endforeach; ?>  
</table>
<?= $this->include('admin/admin_modal')?>
<?= $this->endSection() ?>
