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
                this.submit_form_request = this.callback_form_request.find('.send-request');
                this.callback_form_application = this.find('.callback-form.application');
                this.form_application = this.callback_form_application.find('.form-application');
                this.submit_form_application = this.callback_form_application.find('.send-application');
                this.callback_form_question = this.find('.callback-form.question');
                this.submit_form_question = this.callback_form_question.find('.send-question');
                this.callback_form_close_btns = this.callback_forms.find('.close i');

                this.cur_post_id = null;
                this.application_curr_post_id = this.find('.callback-form.application .order input');

                this.thank_you_message = this.find('.thank-you');

                this.formsFill = new FormsFill($, elem);
                this.events();
            }
            toggle_modal_background(){this.back_drop_modal_2.toggle(); this.toggleScroll();}

            open_request_form(){
                this.callback_form_request.fadeIn(200);
                this.toggle_modal_background();
            }


            set_current_post_id(e){
                // this.cur_post_id = $(e.target).parent().parent().find('.post_id').html();
                this.application_curr_post_id.val($(e.target).parent().parent().find('.post_id').html());
            }
            open_application_form(e){
                this.set_current_post_id(e);
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

            show_thank_you_message(){
                this.callback_forms.fadeOut(200);           // remove form
                setTimeout(() => {                  // show thank message
                    this.thank_you_message.fadeIn(300);
                    }, 200);
                setTimeout(() => {                  // hide thank message
                    this.thank_you_message.fadeOut(300);
                    setTimeout(() => {
                        this.toggle_modal_background();
                    }, 400);
                }, 3000);
            }

            collect_data(form, textarea = false){
                let data = {};
                data.name = form.find('input[name="us_name"]').val();
                data.phone = form.find('input[name="us_phone"]').val();
                if(textarea){data.comment = form.find('textarea[name="us_comment"]').val()}
                return data;
            }
            collect_serialize(array){
                let data = {};
                array.map((v, k)=>{
                    data[v.name] = v.value;
                });
                return data;
            }

            submit_request(){
                let data = this.collect_data(this.callback_form_request);
                this.formsFill.store_request_data();
                this.ajax.post('telegram_request', data);
                this.show_thank_you_message();
            }

            submit_application(e){
                // e.preventDefault();
                let data = this.serialize_form(e.currentTarget);
                this.formsFill.store_application_data();
                this.ajax.post('telegram_application', data);
                // this.show_thank_you_message();
                // $(e.currentTarget).submit();
            }

            submit_question(){
                let data = this.collect_data(this.callback_form_question, true);
                this.formsFill.store_question_data();
                this.ajax.post('telegram_question', data);
                this.show_thank_you_message();
            }


            events(){
                this.btn_request.on('click', this.open_request_form.bind(this));
                this.btn_application.on('click', this.open_application_form.bind(this));
                this.btn_question.on('click', this.open_question_form.bind(this));
                this.callback_form_close_btns.on('click', this.close_callback_forms.bind(this));

                this.submit_form_request.on('click', this.submit_request.bind(this));
                this.form_application.on('submit', this.submit_application.bind(this));
                this.submit_form_question.on('click', this.submit_question.bind(this));
            };
        }
        new TgBot('body',
            '.custom-button-1.request',
            '.custom-button-1.application',
            '.custom-button-1.question');
    });
})(jQuery);