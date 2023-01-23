(function($){
    $(document).ready(()=>{
        class Prices_v2 extends Darth_Vader{
            constructor(elem) {
                super($, elem);

                this.carousel = this.find(".owl-carousel-prices-v2");

                this.events();
            }

            settings(){
                this.carousel.owlCarousel({
                    loop: true,
                    dots: true,
                    margin: 0,
                    autoplay:true,
                    autoplayTimeout:8000,
                    nav: true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:1
                        },
                        1000:{
                            items:1
                        }
                    }
                });
            }
            wrap_all_img(){
                let img = this.carousel.find('img');
                img.map((k, v)=>{
                    $(v).wrap('<div/>');
                });
            }

            events(){
                this.settings();
                this.carousel.owlCarousel();
                this.wrap_all_img();
            };
        }
        new Prices_v2('body');
    });
})(jQuery);