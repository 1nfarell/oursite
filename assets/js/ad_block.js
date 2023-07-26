let ad_block = $('.besplatno-box')

$(ad_block).append(`   
    <div id="carousel_ad_block" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="/catalog/moskit"><img style="border-radius:10px" src="/images-catalog/banner/moskit_banner.png" class="d-block w-100 img-thumbnail" alt="скидка на москитные сетки с фотопечатью"></a>
            </div>
            <div class="carousel-item">
                <a href="/catalog/door"><img style="border-radius:10px" src="/images-catalog/banner/plast_dver_banner.png" class="d-block w-100 img-thumbnail" alt="скидка на пластиковые двери ПВХ"></a>
            </div>
            <div class="carousel-item">
                <a href="/catalog/okna"><img style="border-radius:10px" src="/images-catalog/banner/plast_okna_banner.png" class="d-block w-100 img-thumbnail" alt="скидка на пластиковые окна ПВХ"></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel_ad_block" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carousel_ad_block" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
`)


/*  
    <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
    </div> 
*/
