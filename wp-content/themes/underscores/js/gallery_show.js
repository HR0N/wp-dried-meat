(function($){
    $(document).ready(()=>{
        class Gallery_show extends Darth_Vader{
            constructor(elem) {
                super($, elem);

                this.gallery = this.find('.gallery-show');
                this.close = this.find('.close');
                this.photo_count = this.find('.photo-count');
                // this.prev_img = this.gallery.find('.frame-1 img');
                this.prev_src = '';
                this.main_img = this.gallery.find('.frame-2 img');
                // this.next_img = this.gallery.find('.frame-3 img');
                this.next_src = '';
                this.btn_prev = this.find('.button.prev');
                this.btn_next = this.find('.button.next');
                this.cur_idx = 0;
                this.mgs = this.find('.mgs');   /*    mgs - my gallery show   */
                this.owl_carousel = this.find('.owl-carousel');
                this.mgs_p2 = this.find('.mgs-p2');   /*    mgs - my gallery show   */

                this.events();
            }

            set_src(e){
                let cur_target = $(e.target);
                this.cur_idx = Number(cur_target.attr('data-idx'));
                if(cur_target.hasClass('mgs-p2')){
                    // this.prev_src = this.mgs_p2.parent().find(`img[data-idx="${+cur_idx - 1}"]`).attr('src');
                    // this.next_src = this.mgs_p2.parent().find(`img[data-idx="${+cur_idx + 1}"]`).attr('src');
                    // this.prev_img.attr('src', prev_src);
                    // this.next_img.attr('src', next_src);
                }
                $(this.main_img).attr('src', cur_target.attr('src'));
            }

            show_gallery(e){
                if($(e.target).hasClass('mgs-p2')){
                    this.set_src(e);
                    $(this.gallery).removeClass('fadeOut');
                    $(this.gallery).addClass('fadeIn');
                }
                this.set_new_photo_count();
            }
            hide_gallery(){
                $(this.gallery).removeClass('fadeIn');
                $(this.gallery).addClass('fadeOut');
            }
            check_idx(){
                if(this.cur_idx < 0){this.cur_idx = 0;}
                if(this.cur_idx > this.mgs_p2.length){this.cur_idx = this.mgs_p2.length;}
            }
            set_new_src(){
                this.main_img.fadeOut(5);
                setTimeout(() => {
                    let src = this.mgs_p2.parent().find(`img[data-idx="${this.cur_idx}"]`).attr('src');
                    this.main_img.attr('src', src);
                    this.main_img.fadeIn(400);
                    }, 5)
            }
            set_new_photo_count(){
                let count = this.cur_idx;
                if(count < 1){count = 1}
                if(count > this.mgs_p2.length){count = this.mgs_p2.length}
                let str = `${count} / ${this.mgs_p2.length}`;
                this.photo_count.html(str);
            }
            fade_left_frame(){
                if(this.cur_idx > 1){
                    this.cur_idx -=1;
                    this.check_idx();
                    this.set_new_src();
                    this.set_new_photo_count();
                }
            }
            fade_right_frame(){
                if(this.cur_idx < this.mgs_p2.length){
                    this.cur_idx +=1;
                    this.check_idx();
                    this.set_new_src();
                    this.set_new_photo_count();
                }
            }

            events(){
                this.owl_carousel.on('click', this.show_gallery.bind(this));
                this.close.on('click', this.hide_gallery.bind(this));
                this.btn_prev.on('click', this.fade_left_frame.bind(this));
                this.btn_next.on('click', this.fade_right_frame.bind(this));
            };
        }
        new Gallery_show('body');
    });
})(jQuery);