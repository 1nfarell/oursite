//отложенная загрузка изображений
$(document).ready(function() {
    var lazyloadImages;    
  
    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        console.log(observer);
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.src = image.dataset.src;
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      }, {
        root: document.querySelector("#ancor"),
        rootMargin: "0px 0px 500px 0px"
      });
  
      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {  
      var lazyloadThrottleTimeout;
      lazyloadImages = $(".lazy");
      
      function lazyload () {
        if(lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }    
  
        lazyloadThrottleTimeout = setTimeout(function() {
            var scrollTop = $(window).scrollTop();
            lazyloadImages.each(function() {
                var el = $(this);
                if(el.offset().top < window.innerHeight + scrollTop + 500) {
                  var url = el.attr("data-src");
                  el.attr("src", url);
                  el.removeClass("lazy");
                  lazyloadImages = $(".lazy");
                }
            });
            if(lazyloadImages.length == 0) { 
              $(document).off("scroll");
              $(window).off("resize");
            }
        }, 20);
      }
  
      $(document).on("scroll", lazyload);
      $(window).on("resize", lazyload);
    }
  })

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



