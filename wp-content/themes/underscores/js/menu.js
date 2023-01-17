(function($){
    $(document).ready(()=>{
        class Menu extends Darth_Vader{
            constructor(elem) {
                super($, elem);

                this.menu = this.find('.menu');
                this.back_drop_modal = this.find('.back-drop-modal');
                this.menu_button_show = this.find('.show-menu-btn');
                this.menu_button_hide = this.find('.hide-menu-btn');
                this.menu_toggle = false;

                this.events();
            }

            on_load(){  /*  smooth scrolling to anchors   */
                $('.nav-link').on('click', function(e){
                    let link = $(e.target).attr('href');
                    $('html,body').stop().animate({ scrollTop: $(link).offset().top }, 600);
                    e.preventDefault();
                });
            }

            show_menu(){
                $(this.menu).addClass('show-menu');
                this.back_drop_modal.fadeIn(200);
                this.menu_button_show.css({'display':'none'});
                this.menu_button_hide.css({'display':'block'});
            }
            hide_menu(){
                $(this.menu).removeClass('show-menu');
                this.back_drop_modal.fadeOut(200);
                this.menu_button_show.css({'display':'block'});
                this.menu_button_hide.css({'display':'none'});
            }

            events(){
                this.on_load();
                this.menu_button_show.on('click', this.show_menu.bind(this));
                this.menu_button_hide.on('click', this.hide_menu.bind(this));
            };
        }
        new Menu('body');
    });
})(jQuery);