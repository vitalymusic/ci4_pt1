<!-- Modal -->
<div class="modal fade" id="pagesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 edit_page_title" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="page-form">
           <input type="text" name="page_name" id="page_name"> 
           <textarea name="page_content" id="page_content"></textarea>
           <input type="hidden" name="id" id="page_id" value="">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary save_page_btn">Save changes</button>
      </div>
    </div>
  </div>
</div>