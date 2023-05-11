
(function ($) {  

  $("#contact-form_block").submit(function (event) {
    event.preventDefault();
    
    let form = $("#" + $(this).attr("id"))[0];
    let fd = new FormData(form);
    
    var alertTrigger2 = document.getElementById('category_form-id');        

    $.ajax({
      url: "/php/send-message-to-telegram.php",
      type: "POST",
      data: fd,
      processData: false,
      contentType: false,
      beforeSend: () => { 
        document.getElementById("pressbtnform_block").disabled = true; 
        
      },
      success: function success(res) {       
        
        //Посмотреть на статус ответа, если ошибка
        console.log(res);
        let respond = $.parseJSON(res);

        if (respond === "SUCCESS") {       
                   

          setTimeout(() => {
            $('#contact-form_block').get(0).reset();
            document.getElementById('pressbtnform_block').disabled = false;         
            alert('Привет, мы получили вашу заявку на '+alertTrigger2.value+' и совсем скоро вам перезвоним!', 'success')
          }, 3000); 
          
        } else if (respond === "NOTVALID") {
          document.getElementById('pressbtnform_block').disabled = false;          
          alert('Привет, заполните поля с именем и телефоном!', 'success') 

        } else {
          document.getElementById('pressbtnform_block').disabled = false;          
          alert('Привет, ваша заявка на '+alertTrigger2.value+' не отправилась. Попробуйте еще раз!', 'success')          
        }
      }
    });
  });
})(jQuery);



    
    