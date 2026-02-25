console.log("test");

$(document).ready(()=>{
    $('.editBtn').click((e)=>{
        e.preventDefault();
        

        $.get(e.target.href,(data)=>{
            console.log(data[0].page_name);
            $('.edit_page_title').text("Redigēt sadaļu: "+data[0].page_name);
            if($('.insert_page_btn')){
                $('.insert_page_btn').addClass("save_page_btn").removeClass("insert_page_btn");
            }
              
            $('#page_name').val(data[0].page_name);
            $('#page_content').val(data[0].page_content);
            $('#page_id').val(data[0].id);

            $('#pagesModal').modal('show');
            
        })
    })

    // Lapu saglabāšana
    $('.save_page_btn').click(()=>{
        let formdata = $('#page-form').serialize();
        $.post('admin/updatePage',formdata,(resp)=>{
            if(resp.page_save=="success"){
                    
                    $('#pagesModal').modal('hide');
                    $('#page-form').trigger("reset");
                    $('#pagesModal').on('hidden.bs.modal', function () {
                        location.reload();
                    }); 
            }
        })

    })


    // Jauna sadaļas izveide

    $('.create_page_btn').click(()=>{
            $('.edit_page_title').text("Pievienot jaunu sadaļu");
            $('.save_page_btn').addClass("insert_page_btn").removeClass("save_page_btn");
            $('#pagesModal').modal('show');

    })


    $('.insert_page_btn').click(()=>{
        let formdata = $('#page-form').serialize();
        $.post('admin/createPage',formdata,(resp)=>{
            if(resp.page_save=="success"){
                    
                    $('#pagesModal').modal('hide');
                    $('#page-form').trigger("reset");
                    $('#pagesModal').on('hidden.bs.modal', function () {
                        location.reload();
                    }); 
            }
        })

    })








    // esošās sadaļas dzēšana






})