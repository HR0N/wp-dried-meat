(function($){
    $(document).ready(()=>{
        class Reviews extends Darth_Vader{
            constructor(elem) {
                super($, elem);
                this.carousel = this.find(".owl-carousel-reviews");

                this.events();
            }
            settings(){
                this.carousel.owlCarousel({
                    loop: true,
                    dots: true,
                    margin: 0,
                    autoplay:true,
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
            events(){
                this.settings();
                this.carousel.owlCarousel();
            };
        }
        new Reviews('body');
    });
})(jQuery);