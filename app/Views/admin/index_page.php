<?= $this->extend('admin/admin_layout') ?>

<?= $this->section('page_title') ?>
   <?=$title?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
   <div class="m-3">
      
         <button
            type="button"
            name=""
            id=""
            class="btn btn-secondary create_page_btn"
         >
            + Pievienot sadaļu
         </button>
      
   </div>
<table class="table table-bordered">
      <tr>

      </tr>   
      <?php foreach($pages as $page): ?>
      
         <tr>
            <td><?=$page["page_name"]?></td>
            <td><?=$page["page_date"]?></td>
            <td>
               <a href="<?=base_url("/admin/editpages/{$page["id"]}")?>" type="button" class="btn btn-primary editBtn">Rediģēt</a>
               <a href="<?=base_url("/admin/deletepage/{$page["id"]}")?>" type="button" class="btn btn-danger delBtn">Dzēst</a>
            </td>
         </tr>

       <?php endforeach; ?>  
</table>
<?= $this->include('admin/admin_modal')?>
<?= $this->endSection() ?>
