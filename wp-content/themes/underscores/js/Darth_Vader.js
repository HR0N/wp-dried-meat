class Darth_Vader {
    constructor($, elem) {
        this.el = $(elem);
        this.$ = $;
        this.page = $('html, body');
        this.scroll = true;
        this.ajax = new Ajax(this.$);
    }


    fetch_field(data, field){
        field && field.map((k, v)=>{
            data[this.$(v).attr('name')] = this.$(v).val();
        });
    }
    serialize_form(form){
        let data = {};
        let input = this.$(form).find('input');
        let textarea = this.$(form).find('textarea');
        let select = this.$(form).find('select');

        this.fetch_field(data, input);
        this.fetch_field(data, textarea);
        this.fetch_field(data, select);

        return data;
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