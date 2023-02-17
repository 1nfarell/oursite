(function ($) {
  

  $("#form-submit").submit(function (event) {
    event.preventDefault();
    
    // Сообщения формы
    let successSendText = "Успешно";
    let errorSendText = "Ошибка!";
    let requiredFieldsText = "Заполните поля";

    // Сохраняем в переменную класс с параграфом для вывода сообщений об отправке
    let message = $(this).find(".contact-form__message");

    let form = $("#" + $(this).attr("id"))[0];
    let fd = new FormData(form);
    
    $.ajax({
      url: "/php/send-message-to-telegram.php",
      type: "POST",
      data: fd,
      processData: false,
      contentType: false,
      beforeSend: () => { 
        $(".preloader").addClass("preloader_active"); 
        document.getElementById("pressbtnform").disabled = true; 
        
      },
      success: function success(res) { 
        $(".preloader").removeClass("preloader_active");
        
        //Посмотреть на статус ответа, если ошибка
        console.log(res);
        let respond = $.parseJSON(res);

        if (respond === "SUCCESS") {
          message.text(successSendText).css("color", "rgba(133, 224, 171, 1)");
          setTimeout(() => {
            message.text("");
            $('form').get(0).reset();
            document.getElementById('pressbtnform').disabled = false;
          }, 4000);

          
           
          
        } else if (respond === "NOTVALID") {
          message.text(requiredFieldsText).css("color", "#d42121");
          document.getElementById('pressbtnform').disabled = false;
          setTimeout(() => {
            message.text("");
            
          }, 3000);
        } else {
          message.text(errorSendText).css("color", "#d42121");
          document.getElementById('pressbtnform').disabled = false;
          setTimeout(() => {
            message.text("");
            
          }, 4000);
        }
      }
    });
  });
})(jQuery);
