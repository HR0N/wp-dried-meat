class Darth_Vader {
    constructor($, elem) {
        this.el = $(elem);
    }

    startScroll(){
        document.body.style.height = "auto";
        document.body.style.overflow = "visible";
    }
    stopScroll(){
        document.body.style.height = "calc(100vh - 30px)";
        document.body.style.overflow = "hidden";
    }

    find(selector){return this.el.find(selector);}
}