//добавление полей формы в базу
(function ($) {  

    $("#form--update").submit(function (event) {
      event.preventDefault();
      
      let form = $("#" + $(this).attr("id"))[0];
      let fd = new FormData(form);
       
      $.ajax({
        url: "panel_admin/add_update.php",
        type: "POST",
        data: fd,
        processData: false,
        contentType: false,
        beforeSend: () => { 
            document.getElementById("btn-form--update").disabled = true; 
            document.getElementById("id_new_field_description").disabled = true; 
        },
        success: function success(res) {       
          
          //Посмотреть на статус ответа, если ошибка
          let respond = $.parseJSON(res);
         
          if (respond === "SUCCESS") {       
                     
  
            setTimeout(() => {
              $('#form--update').get(0).reset();
         
              document.getElementById('btn-form--update').disabled = false; 
              document.getElementById("id_new_field_description").disabled = false;     
              document.location.reload(); 
            }, 2000); 
  
          } else if (respond === "NOEMPTY") {
            document.getElementById('btn-form--update').disabled = false;
            document.getElementById("id_new_field_description").disabled = false;
            alert('NOEMPTY!', 'success')

          } else {
            document.getElementById('btn-form--update').disabled = false;  
            document.getElementById("id_new_field_description").disabled = false;        
            alert('Что-то пошло не так!', 'success')          
          }
        }
      });
    });
  })(jQuery);
  