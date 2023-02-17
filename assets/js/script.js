// sdn css houdini
         
    if (CSS && 'paintWorklet' in CSS) CSS.paintWorklet.addModule('/assets/js/smooth-corners.js');    
   
//Липкий заголовок 

    window.onscroll = function() {myFunction()};

    var header = document.getElementById("header");
    var logo = document.getElementById("hide-logo");
    var logoSite = document.getElementById("hide-logo-site");

    function myFunction() {
        if ($(this).scrollTop() > 0) {
            header.classList.add("sticky");                
            logo.classList.add("show-logo");
            logoSite.classList.add("hide-logo-site");
        } else {
            header.classList.remove("sticky");
            logo.classList.remove("show-logo");
            logoSite.classList.remove("hide-logo-site");}}
        
    
//плавный скрол для ссылок 

    $('a[href^="#"').on('click', function() {
        let href = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(href).offset().top
        });
        return false;});


//удержание текста преимущества

    $('.benefit-1').click(function(){             
            if($('.benefit-center-hidden:nth-of-type(1)').hasClass('is-selected')) { $('.benefit-center-hidden:nth-of-type(1)').removeClass('is-selected'); $('.title-benefit-under').removeClass('TitleBenefitHide');} else
            {
                $('.benefit-center-hidden').removeClass('is-selected');
                $('.benefit-center-hidden:nth-of-type(1)').addClass('is-selected');
                $('.title-benefit-under').addClass('TitleBenefitHide');
    }});
    $('.benefit-2').click(function(){             
            if($('.benefit-center-hidden:nth-of-type(2)').hasClass('is-selected')) { $('.benefit-center-hidden:nth-of-type(2)').removeClass('is-selected'); $('.title-benefit-under').removeClass('TitleBenefitHide');} else
            {   
                $('.benefit-center-hidden').removeClass('is-selected');
                
                $('.benefit-center-hidden:nth-of-type(2)').addClass('is-selected');
                $('.title-benefit-under').addClass('TitleBenefitHide');
    }});
    $('.benefit-3').click(function(){ 
        if($('.benefit-center-hidden:nth-of-type(3)').hasClass('is-selected')) { $('.benefit-center-hidden:nth-of-type(3)').removeClass('is-selected'); $('.title-benefit-under').removeClass('TitleBenefitHide');} else
            {
                $('.benefit-center-hidden').removeClass('is-selected');
                $('.benefit-center-hidden:nth-of-type(3)').addClass('is-selected');
                $('.title-benefit-under').addClass('TitleBenefitHide');
    }});
    $('.benefit-4').click(function(){ 
        if($('.benefit-center-hidden:nth-of-type(4)').hasClass('is-selected')) { $('.benefit-center-hidden:nth-of-type(4)').removeClass('is-selected'); $('.title-benefit-under').removeClass('TitleBenefitHide');} else
            {
                $('.benefit-center-hidden').removeClass('is-selected');
                $('.benefit-center-hidden:nth-of-type(4)').addClass('is-selected');
                $('.title-benefit-under').addClass('TitleBenefitHide');
    }});
    $('.benefit-5').click(function(){ 
        if($('.benefit-center-hidden:nth-of-type(5)').hasClass('is-selected')) { $('.benefit-center-hidden:nth-of-type(5)').removeClass('is-selected'); $('.title-benefit-under').removeClass('TitleBenefitHide');} else
            {
                $('.benefit-center-hidden').removeClass('is-selected');
                $('.benefit-center-hidden:nth-of-type(5)').addClass('is-selected');
                $('.title-benefit-under').addClass('TitleBenefitHide');
    }});
    $('.benefit-6').click(function(){ 
        if($('.benefit-center-hidden:nth-of-type(6)').hasClass('is-selected')) { $('.benefit-center-hidden:nth-of-type(6)').removeClass('is-selected'); $('.title-benefit-under').removeClass('TitleBenefitHide');} else
            {
                $('.benefit-center-hidden').removeClass('is-selected');
                $('.benefit-center-hidden:nth-of-type(6)').addClass('is-selected');
                $('.title-benefit-under').addClass('TitleBenefitHide');
    }});

    
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
        panelField.style.maxHeight = "fit-content";}});}


//переворот карточки

    $('.card').click(function(){
        $(this).toggleClass('is-flipped');}); 

//блок цен, для мобилки отключить свайп

    let width = innerWidth;
    console.log(width);
    if(width < 505){
        document.addEventListener('DOMContentLoaded', () => {
        ItcSlider.getOrCreateInstance('#itc-slider', {        
            swipe: false, // без свайпа
            loop:false,
            autoplay:false
        });})
    }


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



