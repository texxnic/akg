$(document).on('ready', function() {

    $('.question').on("click", function() {
        if ($(this).hasClass('question_active')) {
            $(this).removeClass('question_active');

        } else {
            $('.question').each(function(i, element) {
                $(element).removeClass('question_active');

            });
            $(this).toggleClass('question_active');
        };


    });
});