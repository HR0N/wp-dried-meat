class FormsFill extends Darth_Vader{
    constructor($, elem) {
        super($, elem);
        this.form_request = this.find('.callback-form.request');
        this.form_application = this.find('.callback-form.application');
        this.form_question = this.find('.callback-form.question');


        this.form_request_name = this.form_request.find('input[name="us_name"]');
        this.form_request_phone = this.form_request.find('input[name="us_phone"]');

        this.form_application_name = this.form_application.find('input[name="us_name"]');
        this.form_application_s_name = this.form_application.find('input[name="us_s_name"]');
        this.form_application_post = this.form_application.find('input[name="us_post"]');
        this.form_application_phone = this.form_application.find('input[name="us_phone"]');

        this.form_question_name = this.form_question.find('input[name="us_name"]');
        this.form_question_phone = this.form_question.find('input[name="us_phone"]');
        this.form_question_comment = this.form_question.find('textarea[name="us_comment"]');


        this.ls = new LocalStorage();
        this.ls_data = {name: null, s_name: null, phone: null, post: null, comment: null};


        this.events();
    }

    store_request_data(){
        let name = this.form_request_name.val();
        let phone = this.form_request_phone.val();

        name ? this.ls_data.name = name : null;
        phone ? this.ls_data.phone = phone : null;

        this.ls.set('forms', this.ls_data);
    }
    set_request_data(){
        let local_data = this.ls.get('forms');
        local_data.name ? this.form_request_name.val(local_data.name): false;
        local_data.phone ? this.form_request_phone.val(local_data.phone): false;
    }


    store_application_data(){
        let name = this.form_application_name.val();
        let s_name = this.form_application_s_name.val();
        let post = this.form_application_post.val();
        let phone = this.form_application_phone.val();

        name ? this.ls_data.name = name : null;
        s_name ? this.ls_data.s_name = s_name : null;
        post ? this.ls_data.post = post : null;
        phone ? this.ls_data.phone = phone : null;

        this.ls.set('forms', this.ls_data);
    }
    set_application_data(){
        let local_data = this.ls.get('forms');
        local_data.name ? this.form_application_name.val(local_data.name): false;
        local_data.s_name ? this.form_application_s_name.val(local_data.s_name): false;
        local_data.post ? this.form_application_post.val(local_data.post): false;
        local_data.phone ? this.form_application_phone.val(local_data.phone): false;
    }


    store_question_data(){
        let name = this.form_question_name.val();
        let phone = this.form_question_phone.val();
        let comment = this.form_question_comment.val();

        name ? this.ls_data.name = name : null;
        phone ? this.ls_data.phone = phone : null;
        comment ? this.ls_data.comment = comment : null;

        this.ls.set('forms', this.ls_data);
    }
    set_question_data(){
        let local_data = this.ls.get('forms');
        local_data.name ? this.form_question_name.val(local_data.name): false;
        local_data.phone ? this.form_question_phone.val(local_data.phone): false;
        local_data.comment ? this.form_question_comment.val(local_data.comment): false;
    }

    events(){
        !this.ls.get('forms') ? this.ls.set('forms', this.ls_data) : false;

        this.set_request_data();
        this.set_application_data();
        this.set_question_data();
    }
}