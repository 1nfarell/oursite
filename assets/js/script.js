//Липкий заголовок 

    window.onscroll = function() {myFunction()};

    var header = document.getElementById("header");
    var logo = document.getElementById("hide-logo");

    function myFunction() {
        if ($(this).scrollTop() > 0) {
            header.classList.add("sticky");                
            
        } else {
            header.classList.remove("sticky");
            }}
        
// sdn css houdini
         
    if (CSS && 'paintWorklet' in CSS) CSS.paintWorklet.addModule('/assets/js/smooth-corners.js');    
//плавный скрол для ссылок 

    $('a[href^="#"').on('click', function() {
        let href = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(href).offset().top
        });
        return false;});


//блок преимущества
let benefitAmount = 6;
let benefitScrollInterval ;
let benefitScrollTimeout ;
let selectBlockImage = (index) => {      
    let descriptionBlock = $(`.benefit-center-hidden:nth-of-type(${index})`);       
        if(descriptionBlock.hasClass('is-selected')) { 
            descriptionBlock.removeClass('is-selected'); $('.title-benefit-under').removeClass('TitleBenefitHide');
        } else {
            $('.benefit-center-hidden').removeClass('is-selected');
            descriptionBlock.addClass('is-selected');
            $('.title-benefit-under').addClass('TitleBenefitHide');
        }
    };
    
let autoscrollerBenifits = () => {
    index = 0;
    benefitScrollInterval = setInterval(() => { 
                                                index = (index++)%6+1;
                                                selectBlockImage(index)
                                            }, 5000);
};
autoscrollerBenifits();
for(let index = 1; index <= benefitAmount; ++index) { 
    $(`.benefit-${index}`).click(() => {
                selectBlockImage(index);
                clearInterval(benefitScrollInterval);
                clearTimeout(benefitScrollTimeout);
                benefitScrollTimeout = setTimeout(autoscrollerBenifits, 40000);
            });
    }          
   
    
//блок этапы свернуть\развернуть

    var acC = document.getElementsByClassName("accordion-stage");
    var i;
    
    for (i = 0; i < acC.length; i++) {
    acC[i].addEventListener("click", function() {
        this.classList.toggle("active-field");
        var panelField = this.previousElementSibling;
      
        if (panelField.style.maxHeight){
            const element = document.querySelector('#panel-title');
            const topPos = element.getBoundingClientRect().top + window.pageYOffset;

            window.scrollTo({
            top: topPos, 
            behavior: 'smooth' 
            })
            panelField.style.maxHeight = null; 
             
        } else {
        panelField.style.maxHeight = "fit-content";
        }});}


//переворот карточки

    $('.card').click(function(){
        $(this).toggleClass('is-flipped');}); 


//блок ЧаВо

    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = "fit-content";}});}

// textarea symb count

    let textarea = document.getElementById('name');
    function countChars(e) {
        let charCount = e.target.value.length;
        let charCouterEl = document.getElementsByClassName('form-submit-field__counter')[0];
        let maxLength = e.target.getAttribute('maxlength');
        charCouterEl.innerHTML = `<span style="color:${charCount >= maxLength ? '#05f5f5' : '#050505'}" >\
                                        ${charCount}/${maxLength}
                                    </span>`
    }
    textarea.addEventListener('input', countChars);

