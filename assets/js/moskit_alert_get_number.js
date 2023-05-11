
// Всплывающие окна на странице (moskit.html и все москитные сетки)

const alertPlaceholder = document.getElementById('liveAlertPlaceholder')

const alert = (message, type) => {
const wrapper = document.createElement('div')
wrapper.setAttribute('id', 'alert-number');
wrapper.innerHTML = [
    `<div class="alert alert-${type} alert-dismissible" role="alert" >`,
    `   <div>${message}</div>`,
    '   <button type="button" class="btn-close" data-bs-dismiss="alert"  aria-label="Закрыть"></button>',
    '</div>'
].join('')

alertPlaceholder.append(wrapper)
// продолжительность всплывающего окна
setTimeout(() => {
    const alert = bootstrap.Alert.getOrCreateInstance('#alert-number')
    alert.close()
}, 3000);
}

const alertTrigger1 = document.getElementById('moskit-contact_tel_1')
const alertTrigger2 = document.getElementById('moskit-contact_tel_2')
const alertTrigger3 = document.getElementById('info-contact-email')
const alertTrigger4 = document.getElementById('copyadress')
if (alertTrigger1 || alertTrigger2 || alertTrigger3 || alertTrigger4) {
alertTrigger1.addEventListener('click', () => {
    alert('Отлично, номер '+alertTrigger1.textContent+' скопирован в буфер!', 'success')
})
alertTrigger2.addEventListener('click', () => {
    alert('Отлично, номер '+alertTrigger2.textContent+' скопирован в буфер!', 'success')
})
alertTrigger3.addEventListener('click', () => {
    alert('Отлично, почта '+alertTrigger3.textContent+' скопирована в буфер!', 'success')
})
alertTrigger4.addEventListener('click', () => {
    alert('Отлично, адрес офиса: "'+alertTrigger4.textContent+'" скопирован в буфер!', 'success')
})
}

// Копирование номера телефона в буфер
jQuery(document).ready(function($){
    $('.tel').click(function() {
    var $text_copy = $(this);
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($text_copy.text()).select();
    document.execCommand("copy");
    $temp.remove();
    $('.copy_link_mess').fadeIn(400);
    setTimeout(function(){$('.copy_link_mess').fadeOut(400);},5000);
    });
    });