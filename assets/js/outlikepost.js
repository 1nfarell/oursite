let dataForm = $(this).serialize();
var field = $('#main-center');

$.ajax({
    url: 'vendor/outputLikePost.php',
    method: 'GET',
    data: dataForm,                   
    success: function(data){                
        SelectData = JSON.parse(data);
         
        outputData = SelectData;

        
        
        function output(){
            for (let key in outputData){    
                document.title = `${outputData[key]['title']}` + ' - Блог MNDP';
                var meta=document.getElementsByTagName("meta");
                for (var i=0; i<meta.length; i++) {
                    if (meta[i].name.toLowerCase()=="description") {
                        meta[i].content=document.getElementsByClassName("post-text-description")[0].innerHTML;
                    }
                    if (meta[i].name.toLowerCase()=="application-name") {
                        meta[i].content=`${outputData[key]['title']}` + ' - Блог MNDP';
                    }
                    if (meta[i].getAttribute("property")=='og:title') {
                        meta[i].content=`${outputData[key]['title']}` + ' - Блог MNDP';
                    }
                    if (meta[i].getAttribute("property")=="og:description") {
                        meta[i].content=document.getElementsByClassName("post-text-description")[0].innerHTML;
                    }
                }
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
        
          
        output();
        
}})

