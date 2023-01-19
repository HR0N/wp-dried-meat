class Darth_Vader {
    constructor($, elem) {
        this.el = $(elem);
        this.$ = $;
        this.page = $('html, body');
        this.scroll = true;
        this.ajax = new Ajax(this.$);
    }

    startScroll(){
        this.page.css({'overflow-y': 'visible', 'padding-right': '0'});
    }
    stopScroll(){
        this.page.css({'overflow-y': 'hidden', 'padding-right': '10px'});
    }
    toggleScroll(){
        this.scroll = !this.scroll;
        this.scroll ? this.startScroll() : this.stopScroll();
    }

    find(selector){return this.el.find(selector);}
}