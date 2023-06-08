let field_info_menu = $('#info_site_menu');

const getAllMenu = (
    ) => {
    
        //вывод menu
        $(field_info_menu).append(`
            
            <div class="menu__container">
                <div class="menu__container--box_row menu__container--box_row--phone">
                    <div class="menu__container--box menu__container--box__width menu__container--box_padding0" >
                        <div class="menu__container--box_row menu__container--box_column--phone">
                            <div class="menu__container--box_row menu__container--box__width">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/endov/okna-furnitura-endov-02.png" alt="Пластиковые окна">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="окна из пвх и алюминия цены" href="/catalog/okna">Все окна</a>
                                    <a class="menu__href--field" title="Пластиковые окна" href="/catalog/plastic-okno">Пластиковые окна</a>
                                    <a class="menu__href--field" title="Алюминиевые окна" href="/catalog/aluminii-system">Алюминиевые окна</a>
                                    <a class="menu__href--field" title="Раздвижные окна" href="/catalog/portal-okno">Раздвижные окна</a>
                                    <a class="menu__href--field" title="Панорамные окна" href="/catalog/panoramma-okno">Панорамные окна</a>
                                    <a class="menu__href--field" title="Мягкие окна" href="/catalog/soft-okno">Мягкие окна для веранд</a>
                                    <a class="menu__href--field" title="Павильоны и киоски" href="/catalog/okna">Павильоны и киоски</a>
                                    <a class="menu__href--field" title="Нестандартные окна" href="/catalog/okna">Нестандартные окна</a>
                                </div>
                                
                            </div>
                            <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/moskit-plisse-blok1-setki.png" alt="москитные сетки">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="Москитные сетки цены" href="/catalog/moskit">Все москитные сетки</a>
                                    <a class="menu__href--field" title="Рамная москитная сетка (Стандарт)" href="/catalog/moskit_setki/ramnaya">Рамная сетка</a>
                                    <a class="menu__href--field" title="Вставная москитная сетка" href="/catalog/moskit_setki/vstavnaya">Вставная сетка</a>
                                    <a class="menu__href--field" title="Раздвижная москитная сетка" href="/catalog/moskit_setki/razdvizhnaya">Раздвижная сетка</a>
                                    <a class="menu__href--field" title="Распашная москитная сетка" href="/catalog/moskit_setki/raspashnaya">Распашная сетка</a>
                                    <a class="menu__href--field" title="Рулонная москитная сетка" href="/catalog/moskit_setki/rulonnaya">Рулонная сетка</a>
                                    <a class="menu__href--field" title="Плиссе москитная сетка" href="/catalog/moskit_setki/plisse">Плиссе сетка</a>    
                                </div>
                            </div>
                        </div>
                        <div class="menu__container--box_row ">
                            <div class="menu__container--box_row menu__container--box__width">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/dver/dver.png" alt="Козырьки на окно">
                                </div>
                                <div class="menu__container--box">                    
                                    <a class="menu__href--title" title="двери из пвх и алюминия цены" href="/catalog/door">Все двери</a>
                                    <div class="menu__container--box_row menu__container--box_column--phone">
                                        <div class="menu__container--box">
                                            <a class="menu__href--field" title="Пластиковые двери" href="/catalog/plastic-okno">Пластиковые двери</a>
                                            <a class="menu__href--field" title="Москитные двери" href="/catalog/moskit">Москитные двери</a>
                                            <a class="menu__href--field" title="Алюминиевые двери" href="/catalog/aluminii-system">Алюминиевые двери</a>
                                            <a class="menu__href--field" title="Раздвижные двери" href="/catalog/portal-okno">Раздвижные двери</a>
                                            <a class="menu__href--field" title="Балконные двери" href="/catalog/dver-balkonnaya">Балконные двери</a>
                                            <a class="menu__href--field" title="Двери входные" href="/catalog/doors/dver-vhodnaya">Двери входные</a>
                                        </div>
                                        <div class="menu__container--box menu__container--box__marginleft" >
                                            <a class="menu__href--field" title="Двери душевые" href="/catalog/doors/dver-dushevaya">Двери душевые</a>
                                            <a class="menu__href--field" title="Стеклянные двери" href="/catalog/doors/dver-steklyannaya">Стеклянные двери</a>
                                            <a class="menu__href--field" title="Противопожарные двери" href="/catalog/doors/dver-pozhar">Противопожарные двери</a>
                                            <a class="menu__href--field" title="Противопожарные люки" href="/catalog/doors/dver-luk">Противопожарные люки</a>
                                            <a class="menu__href--title" title="Металлические стеллажи" style="padding-top: 5px;" href="/catalog/stellaj">Металлические стеллажи</a>
                                        </div>
                                    </div>
                                  
                                </div>
                              
                            </div>
                        </div>
                        <div class="menu__container--box_row menu__container--box_column--phone">
                            <div class="menu__container--box_row menu__container--box__width ">
                               
                                
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/balkon-6.webp" alt="Балконы и лоджии">
                                </div>
                                <div class="menu__container--box">  
                                    <a class="menu__href--title" title="Остекление балконов и лоджий" href="/catalog/balkon">Балконы и лоджии</a>
                                    <a class="menu__href--field" title="Холодный балкон" href="/catalog/balkon">Холодное остекление</a>
                                    <a class="menu__href--field" title="Теплый балкон" href="/catalog/balkon">Теплое остекление</a>
                                    <a class="menu__href--field" title="Панорамное остекление" href="/catalog/balkon">Панорамное остекление</a>
                                    <a class="menu__href--field" title="Французкий балкон" href="/catalog/balkon">Французкий балкон</a>
                                </div>
                            </div>
                                            
                            <div class="menu__container--box_row menu__container--box__width menu__container--box__margin menu__container--box__marginbottom">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/okna-markiz.png" alt="Козырьки и маркизы">
                                </div>
                                <div class="menu__container--box">  
                                    <a class="menu__href--title" title="Козырьки и маркизы" href="/catalog/okna">Козырьки и маркизы</a>
                                    <a class="menu__href--field" title="Автоматические маркизы" href="/catalog/okna">Автоматические маркизы</a>
                                    <a class="menu__href--field" title="Механические маркизы" href="/catalog/okna">Механические маркизы</a>
                                    <a class="menu__href--field" title="Козырьки для крыльца" href="/catalog/door">Козырьки для крыльца</a>
                                </div>
                            </div>
                                                
                         
                        </div>
                    </div>
                    <div class="menu__container--box menu__container--box__width menu__container--box_padding0">
                        <div class="menu__container--box_row menu__container--box_column--phone">
                            <div class="menu__container--box_row menu__container--box__width">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/onka-rollet.png" alt="Рольставни">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="Рольставни" href="/catalog/okna">Рольставни</a>
                                    <a class="menu__href--field" title="Рольставни на окна" href="/catalog/okna">Рольставни на окна</a>
                                    <a class="menu__href--field" title="Рольставни в проем" href="/catalog/door">Рольставни в проем</a>
                                    <a class="menu__href--field" title="Прозрачные рольставни" href="/catalog/door">Прозрачные рольставни</a>
                                </div>
                            </div>
                            <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/krovelnye-raboty-1.webp" alt="Кровельные работы">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="Кровельные работы" href="/catalog/krovelnye-raboty">Кровельные работы</a>    
                                    <a class="menu__href--field" title="Монтаж мягкой кровли" href="/catalog/krovelnye-raboty">Монтаж мягкой кровли</a>  
                                    <a class="menu__href--field" title="Монтаж металлочерепицы" href="/catalog/krovelnye-raboty">Монтаж черепицы</a>  
                                    <a class="menu__href--field" title="Монтаж профнастила" href="/catalog/krovelnye-raboty">Монтаж профнастила</a>  
                                </div>
                            </div>
                        </div>
                        <div class="menu__container--box_row menu__container--box_column--phone">
                            <div class="menu__container--box_row menu__container--box__width">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/okna-remont.png" alt="Ремонт окон, дверей, сеток">
                                </div>
                                <div class="menu__container--box">   
                                    <a class="menu__href--title" title="Ремонт окон" href="/catalog/okna">Ремонт</a>
                                    <a class="menu__href--field" title="Ремонт окон" href="/catalog/okna">Ремонт окон</a>
                                    <a class="menu__href--field" title="Ремонт дверей" href="/catalog/door">Ремонт дверей</a>
                                    <a class="menu__href--field" title="Ремонт москитных сеток" href="/catalog/moskit">Ремонт москитных сеток</a>
                                </div>
                            </div>
                            <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/cvet_gamma.jpg" alt="Покраска окон">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="Покраска" href="/catalog/okna">Покраска</a>
                                    <a class="menu__href--field" title="Покраска окон" href="/catalog/okna">Покраска окон</a>
                                    <a class="menu__href--field" title="Покраска дверей" href="/catalog/door">Покраска дверей</a>
                                    <a class="menu__href--field" title="Покраска москитных сеток" href="/catalog/moskit">Покраска сеток на окна</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu__container--box_row menu__container--box_column--phone">
                            <div class="menu__container--box_row menu__container--box__width">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/okna-nashelnik.png" alt="Подоконники, Откосы ПВХ, Отливы, Нащельники, Козырьки">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="Для окна" href="/catalog/okna">Для окна</a>
                                    <a class="menu__href--field" title="Подоконники" href="/catalog/okna">Подоконники</a>
                                    <a class="menu__href--field" title="Откосы ПВХ" href="/catalog/okna">Откосы ПВХ</a>
                                    <a class="menu__href--field" title="Отливы" href="/catalog/okna">Отливы</a>
                                    <a class="menu__href--field" title="Нащельники" href="/catalog/okna">Нащельники</a>
                                    <a class="menu__href--field" title="Козырьки" href="/catalog/okna">Козырьки</a>
                                </div>
                            </div>
                            <div class="menu__container--box_row menu__container--box__width menu__container--box__margin">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images/jaluzi-2.webp" alt="жалюзи">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="Жалюзи" href="/catalog/jaluzi">Все жалюзи</a>
                                    <a class="menu__href--field" title="Жалюзи вертикальные" href="/catalog/jaluzi">Жалюзи вертикальные</a>
                                    <a class="menu__href--field" title="Жалюзи горизонтальные" href="/catalog/jaluzi">Жалюзи горизонтальные</a>
                                    <a class="menu__href--field" title="Жалюзи рулонные" href="/catalog/jaluzi">Жалюзи рулонные</a>
                                    <a class="menu__href--field" title="Жалюзи день-ночь" href="/catalog/jaluzi">Жалюзи день-ночь</a>
                                    <a class="menu__href--field" title="Жалюзи с рисунком" href="/catalog/jaluzi">Жалюзи с рисунком</a>
                                </div>
                            </div>
                        </div>
                        <div class="menu__container--box_row menu__container--box_column--phone">
                            <div class="menu__container--box_row menu__container--box__width">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/maco/MULTI-Zubehoer-Fangputzschere.jpg" alt="Оконная фурнитура">
                                </div>
                                <div class="menu__container--box">
                                    <a class="menu__href--title" title="Оконная фурнитура" href="/catalog/okna">Оконная фурнитура</a>
                                    <a class="menu__href--field" title="Фурнитура ENDOV" href="/catalog/okna">Фурнитура ENDOV</a>
                                    <a class="menu__href--field" title="Фурнитура MACO" href="/catalog/okna">Фурнитура MACO</a>
                                    <a class="menu__href--field" title="Фурнитура SIEGENIA" href="/catalog/okna">Фурнитура SIEGENIA</a>
                                </div>
                            </div>
                            <div class="menu__container--box_row menu__container--box__width menu__container--box__margin menu__container--box__marginbottom">
                                <div class="menu__container--box">
                                    <img loading="lazy" class="img-menu" src="/images-catalog/steklo-3.webp" alt="Работа со стеклом">
                                </div>
                                <div class="menu__container--box">      
                                    <a class="menu__href--title" title="Работа со стеклом" href="/catalog/steklo">Работа со стеклом</a>
                                    <a class="menu__href--field" title="Стекла и зеркала" href="/catalog/steklo">Обработка и шлифовка</a>
                                    <a class="menu__href--field" title="Стекла и зеркала" href="/catalog/steklo">Нанесение защ. пленки</a>
                                    <a class="menu__href--field" title="Зеркала" href="/catalog/steklo">Резка стекла и зеркал</a> 
                                    <a class="menu__href--title" style="padding-bottom: 0px" title="Стеклопакеты" href="/catalog/steklopaket">Стеклопакеты</a>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `)
      
    }

getAllMenu()

{/* <div class="menu__container">
               
               <div class="menu__container--box_row">
                   <div class="menu__container--box">
                       <a class="menu__href--title" title="окна из пвх и алюминия цены" href="/catalog/okna">Все окна</a>
                       <a class="menu__href--field" title="Пластиковые окна" href="/catalog/plastic-okno">Пластиковые окна</a>
                       <a class="menu__href--field" title="Алюминиевые окна" href="/catalog/aluminii-system">Алюминиевые окна</a>
                       <a class="menu__href--field" title="Раздвижные окна" href="/catalog/portal-okno">Раздвижные окна</a>
                       <a class="menu__href--field" title="Панорамные окна" href="/catalog/panoramma-okno">Панорамные окна</a>
                       <a class="menu__href--field" title="Мягкие окна" href="/catalog/soft-okno">Мягкие окна для веранд</a>
                       <a class="menu__href--field" title="Павильоны и киоски" href="/catalog/okna">Павильоны и киоски</a>
                       <a class="menu__href--field" title="Нестандартные окна" href="/catalog/okna">Нестандартные окна</a>
                   </div>
                   <div class="menu__container--box">
                       <a class="menu__href--title" title="Москитные сетки цены" href="/catalog/moskit">Все москитные сетки</a>
                       <a class="menu__href--field" title="Рамная москитная сетка (Стандарт)" href="/catalog/moskit_setki/ramnaya">Рамная сетка</a>
                       <a class="menu__href--field" title="Вставная москитная сетка" href="/catalog/moskit_setki/vstavnaya">Вставная сетка</a>
                       <a class="menu__href--field" title="Раздвижная москитная сетка" href="/catalog/moskit_setki/razdvizhnaya">Раздвижная сетка</a>
                       <a class="menu__href--field" title="Распашная москитная сетка" href="/catalog/moskit_setki/raspashnaya">Распашная сетка</a>
                       <a class="menu__href--field" title="Рулонная москитная сетка" href="/catalog/moskit_setki/rulonnaya">Рулонная сетка</a>
                       <a class="menu__href--field" title="Плиссе москитная сетка" href="/catalog/moskit_setki/plisse">Плиссе сетка</a>    
                   </div>
               </div>
               <div class="menu__container--box_row">
                   <div class="menu__container--box">   
                       <div class="container--box__field">                     
                           <a class="menu__href--title" title="двери из пвх и алюминия цены" href="/catalog/door">Все двери</a>
                           <a class="menu__href--field" title="Пластиковые двери" href="/catalog/plastic-okno">Пластиковые двери</a>
                           <a class="menu__href--field" title="Москитные двери" href="/catalog/moskit">Москитные двери</a>
                           <a class="menu__href--field" title="Алюминиевые двери" href="/catalog/aluminii-system">Алюминиевые двери</a>
                           <a class="menu__href--field" title="Раздвижные двери" href="/catalog/portal-okno">Раздвижные двери</a>
                           <a class="menu__href--field" title="Балконные двери" href="/catalog/dver-balkonnaya">Балконные двери</a>
                           <a class="menu__href--field" title="Двери входные" href="/catalog/doors/dver-vhodnaya">Двери входные</a>
                           <a class="menu__href--field" title="Двери душевые" href="/catalog/doors/dver-dushevaya">Двери душевые</a>
                           <a class="menu__href--field" title="Стеклянные двери" href="/catalog/doors/dver-steklyannaya">Стеклянные двери</a>
                           <a class="menu__href--field" title="Противопожарные двери" href="/catalog/doors/dver-pozhar">Противопожарные двери</a>
                           <a class="menu__href--field" title="Противопожарные люки" href="/catalog/doors/dver-luk">Противопожарные люки</a>
                       </div>
                       <div class="container--box__field">                            
                           <div class="container--box__field">
                               <a class="menu__href--title" title="Кровельные работы" href="/catalog/krovelnye-raboty">Кровельные работы</a>    
                               <a class="menu__href--field" title="Монтаж мягкой кровли" href="/catalog/krovelnye-raboty">Монтаж мягкой кровли</a>  
                               <a class="menu__href--field" title="Монтаж металлочерепицы" href="/catalog/krovelnye-raboty">Монтаж металлочерепицы</a>  
                               <a class="menu__href--field" title="Монтаж профнастила" href="/catalog/krovelnye-raboty">Монтаж профнастила</a>  
                           </div>                           
                           <div class="container--box__field">
                               <a class="menu__href--title" title="Стеклопакеты" href="/catalog/steklopaket">Стеклопакеты</a> 
                           </div>
                       </div>
                   </div>
                   <div class="menu__container--box">
                       <div class="container--box__field">
                           <a class="menu__href--title" title="Остекление балконов и лоджий" href="/catalog/balkon">Остекление балконов и лоджий под ключ</a>
                           <a class="menu__href--field" title="Холодный балкон" href="/catalog/balkon">Холодное остекление</a>
                           <a class="menu__href--field" title="Теплый балкон" href="/catalog/balkon">Теплое остекление</a>
                           <a class="menu__href--field" title="Панорамное остекление" href="/catalog/balkon">Панорамное остекление</a>
                           <a class="menu__href--field" title="Французкий балкон" href="/catalog/balkon">Французкий балкон</a>
                       </div>                       
                       <div class="container--box__field">
                           <a class="menu__href--title" title="Козырьки и маркизы" href="/catalog/okna">Козырьки и маркизы</a>
                           <a class="menu__href--field" title="Автоматические маркизы" href="/catalog/okna">Автоматические маркизы</a>
                           <a class="menu__href--field" title="Механические маркизы" href="/catalog/okna">Механические маркизы</a>
                           <a class="menu__href--field" title="Козырьки для крыльца" href="/catalog/door">Козырьки для крыльца</a>
                       </div>
                       <div class="container--box__field">
                           <a class="menu__href--title" title="Рольставни" href="/catalog/okna">Рольставни</a>
                           <a class="menu__href--field" title="Рольставни на окна" href="/catalog/okna">Рольставни на окна</a>
                           <a class="menu__href--field" title="Рольставни в проем" href="/catalog/door">Рольставни в проем</a>
                           <a class="menu__href--field" title="Прозрачные рольставни" href="/catalog/door">Прозрачные рольставни</a>
                       </div>  
                       <div class="container--box__field">
                           <a class="menu__href--title" title="Металлические стеллажи" href="/catalog/stellaj">Металлические стеллажи</a>
                       </div>                     
                   </div>
               </div>
               <div class="menu__container--box_row">
                   <div class="menu__container--box">
                       <a class="menu__href--title" title="Ремонт окон" href="/catalog/okna">Ремонт</a>
                       <a class="menu__href--field" title="Ремонт окон" href="/catalog/okna">Ремонт окон</a>
                       <a class="menu__href--field" title="Ремонт дверей" href="/catalog/door">Ремонт дверей</a>
                       <a class="menu__href--field" title="Ремонт москитных сеток" href="/catalog/moskit">Ремонт москитных сеток</a>
                   </div>
                   <div class="menu__container--box">
                       <a class="menu__href--title" title="Покраска" href="/catalog/okna">Покраска</a>
                       <a class="menu__href--field" title="Покраска окон" href="/catalog/okna">Покраска окон</a>
                       <a class="menu__href--field" title="Покраска дверей" href="/catalog/door">Покраска дверей</a>
                       <a class="menu__href--field" title="Покраска москитных сеток" href="/catalog/moskit">Покраска москитных сеток</a>
                   </div>
               </div>
               <div class="menu__container--box_row">
                   <div class="menu__container--box">
                       <a class="menu__href--title" title="Дополнительно к окнам" href="/catalog/okna">Дополнительно к окнам</a>
                       <a class="menu__href--field" title="Подоконники" href="/catalog/okna">Подоконники</a>
                       <a class="menu__href--field" title="Откосы ПВХ" href="/catalog/okna">Откосы ПВХ</a>
                       <a class="menu__href--field" title="Отливы" href="/catalog/okna">Отливы</a>
                       <a class="menu__href--field" title="Нащельники" href="/catalog/okna">Нащельники</a>
                       <a class="menu__href--field" title="Козырьки" href="/catalog/okna">Козырьки</a>
                   </div>
                   <div class="menu__container--box">
                       <a class="menu__href--title" title="Жалюзи" href="/catalog/jaluzi">Все жалюзи</a>
                       <a class="menu__href--field" title="Жалюзи вертикальные" href="/catalog/jaluzi">Жалюзи вертикальные</a>
                       <a class="menu__href--field" title="Жалюзи горизонтальные" href="/catalog/jaluzi">Жалюзи горизонтальные</a>
                       <a class="menu__href--field" title="Жалюзи рулонные" href="/catalog/jaluzi">Жалюзи рулонные</a>
                       <a class="menu__href--field" title="Жалюзи день-ночь" href="/catalog/jaluzi">Жалюзи день-ночь</a>
                       <a class="menu__href--field" title="Жалюзи с рисунком" href="/catalog/jaluzi">Жалюзи с рисунком</a>
                   </div>
               </div>
               <div class="menu__container--box_row">
                   <div class="menu__container--box">
                       <a class="menu__href--title" title="Оконная фурнитура" href="/catalog/okna">Оконная фурнитура</a>
                       <a class="menu__href--field" title="Фурнитура ENDOV" href="/catalog/okna">Фурнитура ENDOV</a>
                       <a class="menu__href--field" title="Фурнитура MACO" href="/catalog/okna">Фурнитура MACO</a>
                       <a class="menu__href--field" title="Фурнитура SIEGENIA" href="/catalog/okna">Фурнитура SIEGENIA</a>
                   </div>
                   <div class="menu__container--box">      
                       <a class="menu__href--title" title="Работа со стеклом" href="/catalog/steklo">Работа со стеклом</a>
                       <a class="menu__href--field" title="Стекла и зеркала" href="/catalog/steklo">Обработка и шлифовка</a>
                       <a class="menu__href--field" title="Стекла и зеркала" href="/catalog/steklo">Нанесение защ. пленки</a>
                       <a class="menu__href--field" title="Зеркала" href="/catalog/steklo">Резка стекла и зеркал</a>     
                   </div>
               </div>
           </div> */}