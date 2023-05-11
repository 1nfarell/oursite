

(function ($) {  

    $(".table_form").submit(function (event) {
      event.preventDefault();
      
      let form = $("#" + $(this).attr("id"))[0];
      let fd = new FormData(form);
      
      $.ajax({
        url: "order/add_changes_order.php",
        type: "POST",
        data: fd,
        processData: false,
        contentType: false,
        success: function success(res) { 
          //Посмотреть на статус ответа, если ошибка
          let respond = $.parseJSON(res);
         
          if (respond === "SUCCESS") {  
            setTimeout(() => {
              $('#form--add_order').get(0).reset();        
              alert('Изменения сохранены в базу!', 'success')
            }, 3000); 
            
          } else if (respond === "NOTVALID") {         
            alert('Сначала внесите изменения', 'success') 
  
          } else {        
            alert('Изменения не добавлены в базу. Попробуйте еще раз!', 'success')          
          }
        }
      });
    });
  })(jQuery);