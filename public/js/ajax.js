$(document).ready(function() {
    $(".formsubmit").on("submit", function(event) {
        event.preventDefault();
        let formData = new FormData(this); // Sửa ở đây
        let thisform = $(this);
        let phpSiteBack = $(this).attr('id');
        
        $.ajax({
            type: "POST",
            url: phpSiteBack,
            data: formData,
            processData: false, // Thêm
            contentType: false, // Thêm
            dataType: 'json',
            success: function(response) {
                console.log(response);
                console.log(response.result);
                if(response.result==1) {
                    window.location.reload();
                }
               
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("b");
            }
        });
    });
    $(".dangxuat").on("click", function () {
        
        $.ajax({
            type: "POST",
            url: "?page=ajax&action=logout",
           
            success: function(response) {
               
                
                    window.location.reload();
                
               
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("b");
            }
        });
      })
});
