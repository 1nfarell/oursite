let dataForm = $(this).serialize();
let field = $('#field-center');
//вывод outputCabinet.php (вывод списка в таблицу в cabinet.php)
function tableValue() {
    
    let arr = "";
    for(let key in SelectData){ arr = arr + '<tr><td class="table-field-tr id">'+`${SelectData[key]['id']}`+'</td>\
            <td class="table-field-tr title"><a href="post.php?title='+`${SelectData[key]['title']}`+'&id='+`${SelectData[key]['id']}`+'">'+`${SelectData[key]['title']}`+'</a></td>\
            <td class="table-field-tr name">'+`${SelectData[key]['name']}`+'</td>\
            <td class="table-field-tr views">'+`${SelectData[key]['views']}`+'</td>\
            <td><input class="editButton" type="button" value="Изменить"/>\
                <input id="'+`${SelectData[key]['id']}`+'" class="deleteButton" type="button" value="Удалить"/></td></tr>';
    }
    return arr;    
}

$.ajax({
    url: 'vendor/outputCabinet.php',
    method: 'GET',
    data: dataForm,
    success: function(data){
        SelectData = JSON.parse(data); 
        function getTable(){ $(field).append('<div class="field table-responsive">\
                                    <table id="table-field" class="table table-hover table-striped">\
                                        <tr>\
                                            <th class="table-field-th id">ID</th>\
                                            <th class="table-field-th title">Название</th>\
                                            <th class="table-field-th name">Категория</th>\
                                            <th class="table-field-th views">Просм.</th>\
                                            <th class="table-field-th btnfield"></th>\
                                        </tr>'+`${tableValue()}`+'\
                                    </table></div>');
        }
        getTable();
        $(".deleteButton").click(function (e) { 
            if(confirm("Подтверждение удаления рецепта. Удалить?")){
                $.ajax({
                    url: 'vendor/deletePost.php', 
                    method: 'GET',
                    data: {article_id: e.target.id},
                }); 
                document.location.reload();   
            }        
    })      
}});


                      
       