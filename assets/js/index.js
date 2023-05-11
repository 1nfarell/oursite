$(document).ready(function(){
    function output(field, outputData){
        
        $(field).empty();
        for (let key in outputData){ 
            $(field).append('                                                                                          \
                <div class="main-field">                                                                               \
                    <a class="card-picture-teg-a" href="post.php?title='+`${outputData[key]['title']}`+'&id='+`${outputData[key]['id']}`+'">      \
                        <img class="card-text-picture"  src="data:image/jpeg;base64,'+`${outputData[key]['image']}`+'">\
                    </a>                                                                                               \
                    <div class="card-id">                                                                              \
                        <img class="card-icon-id" src="images\\hashtag-sign.png">                                      \
                        <p class="card-id-name">'+`${outputData[key]['categName']}`+'</p>                              \
                    </div>                                                                                             \
                    <a class="card-title" href="post.php?title='+`${outputData[key]['title']}`+'&id='+`${outputData[key]['id']}`+'">\
                        <h2>'+`${outputData[key]['title']}`+'</h2>                                                     \
                    </a><div>                                                                                               \
                    <div class="card-autor">                                                                           \
                        <img class="card-icon-autor" src="images\\icon-user.png">                                      \
                        <a href="">                                \
                            <p class="card-text-autor">'+`${outputData[key]['full_name']}`+'</p>                       \
                        </a></div>\
                    <div class="post-date">\
                    <img class="post-icon-date" src="images\\date.png">\
                    <p class="post-date">'+`${outputData[key]['date']}`+'</p></div></div></div>'
            );          
        } 
    }

    let mostViewed = new Pagination();
    mostViewed.setoutputRoot(document.querySelector('.most-viewed'));
    mostViewed.output = output;
    mostViewed.perPage = 2;
    mostViewed.maxPage = 1;
    mostViewed.sortByViews();
    
    mostViewed.renderFirstPage();
    
    let pag = new Pagination();
    pag.output = output;
    pag.perPage = 6;
    pag.maxPage = 2;
    pag.setoutputRoot(document.querySelector('#main-center'));
    pag.renderNavigation(document.querySelector('.pagination'));
    pag.renderFirstPage();
    let catElements =  document.querySelectorAll('.main-menu > option');


    let categoryTitle = document.querySelector('.main-title');
    catElements.forEach((item) => {
        item.addEventListener('click', (e) => {
            pag.category = e.target.getAttribute('value');
            pag.renderFirstPage();
            categoryTitle.innerHTML = e.target.text.toUpperCase();
        })
    });
});









