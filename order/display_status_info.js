
//
function display_status_info(status_info){
    for(i in status_info){    
        let info_html = `
            <span class="badge text-bg-primary position-relative info-btn">${status_info[i]['status']}
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger info-btn_counter">${status_info[i]['results']}</span>
            </span>    
        `
        $('.all-order-title').append(info_html);
        if(status_info[i]['status'] == "В обработке"){            
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(204, 154, 6) !important'
        } else if(status_info[i]['status'] == "Сборка"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(10, 162, 192) !important'
        } else if(status_info[i]['status'] == "Доставка"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(82, 13, 194) !important'    
        } else if(status_info[i]['status'] == "Готово к отгрузке"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(26, 161, 121) !important'
        } else if(status_info[i]['status'] == "Предоплата"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(204, 154, 6) !important'
        } else if(status_info[i]['status'] == "Рассрочка"){
            document.querySelectorAll('.info-btn')[i].style.cssText = 'background-color:rgb(253, 126, 20) !important'
        }
    }
}


$.ajax({
    url: 'order/get_count_status.php',
    method: 'POST',
    data: {fd, 
        },
    success: function(data){
        
        let FSelectData = JSON.parse(data);                  
        let temp =  FSelectData; 
        
        if(temp !=null){   
            display_status_info(temp); 
        } 
}});