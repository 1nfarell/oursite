
class Pagination {

    #currentPage = 1;
    maxPage = 3;
    perPage = 2;
    #indicator;
    category = "all";
    #outputRoot = document.querySelector('.pag-items');
    #paginationRoot = document.querySelector('.pag-root');
    setoutputRoot(root) {
        this.#outputRoot = root;
    }
    #setCurrentPage(iNumber) {
        if(iNumber < 1) {
            iNumber = 1;
        }
        if(iNumber > this.maxPage) {
            iNumber = this.maxPage;
        }
        this.#currentPage = iNumber;
        this.#getData(this.#currentPage);
        this.#indicator.text = this.#currentPage; 
    }
    visiblePagesCap = 3;
    #navigationLeftArrow = "&laquo;"
    #navigationRightArrow = "&raquo;"

    #prevPage() {
        this.#setCurrentPage(this.#currentPage - 1);
    }
    #nextPage() {
        this.#setCurrentPage(this.#currentPage + 1);
    }
    renderNavigation(navRoot) {
        
        // this.#setCurrentPage(navRoot)
        let pN = document.createElement('a');
        pN.classList.add('pagination-active');
        this.#indicator = pN;
        let lArrow = document.createElement('a');
        lArrow.innerHTML = this.#navigationLeftArrow;
        lArrow.addEventListener('click', () => {this.#prevPage()});
        let rArrow = document.createElement('a');
        rArrow.addEventListener('click', () => {this.#nextPage()});
        rArrow.innerHTML = this.#navigationRightArrow;
        navRoot.append(lArrow);
        navRoot.append(this.#indicator);
        navRoot.append(rArrow);
    }

    renderFirstPage() {
        this.#setCurrentPage(1);
    }

    output(field, outputData){
    }

    #renderData(data, context) {
        
        data = JSON.parse(data);
        console.log(`countArray: `, Math.ceil(data.count/context.perPage));
        context.maxPage = Math.ceil(data.count/context.perPage);
        context.output(context.#outputRoot, data.items);
    }

    #getData(page) {
        let xhttp = new XMLHttpRequest(); 
        let formData = new FormData();
        formData.append('page', page,);
        formData.append( 'perPage', this.perPage);
        formData.append( 'category', this.category);
        let fun = this.#renderData;
        let context = this;
        xhttp.onreadystatechange = function() {
            if (this.readyState == xhttp.DONE && this.status == 200) {
                
                 fun(xhttp.response,context);
            }
        };
        
        xhttp.open("POST", "vendor/outputPostsPage.php", true);
        xhttp.send(formData);
        
    }   
}