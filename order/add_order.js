

(function ($) {  

    $("#form--add_order").submit(function (event) {
      event.preventDefault();
      
      let form = $("#" + $(this).attr("id"))[0];
      let fd = new FormData(form);
      
      var alertTrigger2 = document.getElementById('input-form--add_order').value;        
       
      $.ajax({
        url: "order/add_order.php",
        type: "POST",
        data: fd,
        processData: false,
        contentType: false,
        beforeSend: () => { 
            document.getElementById("btn-form--add_order").disabled = true; 
          
        },
        success: function success(res) {       
          
          //Посмотреть на статус ответа, если ошибка
          let respond = $.parseJSON(res);
         
          if (respond === "SUCCESS") {       
                     
  
            setTimeout(() => {
              $('#form--add_order').get(0).reset();
              document.getElementById('btn-form--add_order').disabled = false;         
              alert('Заказ '+alertTrigger2+' добавлен в базу!', 'success')
            }, 3000); 
  
          } else if (respond === "NOEMPTY") {
            document.getElementById('btn-form--add_order').disabled = false;
            alert('Номер заказа уже существует в базе!', 'success')

          } else {
            document.getElementById('btn-form--add_order').disabled = false;          
            alert('Заказ '+alertTrigger2+' не добавлен в базу. Попробуйте еще раз!', 'success')          
          }
        }
      });
    });
  })(jQuery);
  
  
  
      
      