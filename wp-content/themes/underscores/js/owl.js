(function($){
    $(document).ready(()=>{
        class Owl extends Darth_Vader{
            constructor(elem) {
                super($, elem);

                this.carousel = this.find(".owl-carousel");
                this.owl_items = this.find('.owl-items');
                this.images = this.carousel.find('img');

                this.events();
            }

            settings(){
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    dots: true,
                    margin: 0,
                    autoplay:true,
                    nav: true,
                    responsive:{
                        0:{
                            items:2
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:6
                        }
                    }
                });
            }

            change_all_img_height(){
                let images = this.carousel.find('img');
                images.map((k, v)=>{
                    $(v).parent().css({'height':this.images[0].width * 2});
                });
            }

            events(){
                this.settings();
                this.carousel.owlCarousel();
                this.change_all_img_height();

                this.carousel.on('changed.owl.carousel', () => {
                    this.change_all_img_height();
                });
            };
        }
        new Owl('body');
    });
})(jQuery);