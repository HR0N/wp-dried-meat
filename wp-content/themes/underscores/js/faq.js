(function($){
    $(document).ready(()=>{
        class FAQ extends Darth_Vader{
            constructor(elem) {
                super($, elem);

                this.questions = this.find('.faq-question');

                this.events();
            }

            questionHandler(e){
                $(e.currentTarget).toggleClass('question-max-height');
            }

            events(){
                this.questions.on('click', this.questionHandler.bind(this));
            };
        }
        new FAQ('body');
    });
})(jQuery);