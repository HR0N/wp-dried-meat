(function($){
    $(document).ready(()=>{
        class TgBot extends Darth_Vader{
            constructor(elem, bg1, bg2, bg3) {
                super($, elem);

                this.btn_request = this.find(bg1);
                this.btn_application = this.find(bg2);
                this.btn_question = this.find(bg3);

                this.back_drop_modal_2 = this.find('.back-drop-modal-2');
                this.callback_forms = this.find('.callback-form');
                this.callback_form_request = this.find('.callback-form.request');
                this.callback_form_application = this.find('.callback-form.application');
                this.callback_form_question = this.find('.callback-form.question');
                this.callback_form_close_btns = this.callback_forms.find('.close i');

                this.events();
            }
            toggle_modal_background(){this.back_drop_modal_2.toggle(); this.toggleScroll();}

            open_request_form(){
                this.callback_form_request.fadeIn(200);
                this.toggle_modal_background();
            }

            open_application_form(){
                this.callback_form_application.fadeIn(200);
                this.toggle_modal_background();
            }

            open_question_form(){
                this.callback_form_question.fadeIn(200);
                this.toggle_modal_background();
            }

            close_callback_forms(){
                this.callback_forms.fadeOut(200);
                this.toggle_modal_background();
            }


            events(){
                this.btn_request.on('click', this.open_request_form.bind(this));
                this.btn_application.on('click', this.open_application_form.bind(this));
                this.btn_question.on('click', this.open_question_form.bind(this));
                this.callback_form_close_btns.on('click', this.close_callback_forms.bind(this));
            };
        }
        new TgBot('body',
            '.custom-button-1.request',
            '.custom-button-1.application',
            '.custom-button-1.question');
    });
})(jQuery);