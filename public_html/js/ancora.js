$(document).ready(function() {
    $('.bottom').click(function() {
        $('html, body').animate({
            scrollTop: $(document).height()
        }, 1000);
        return false;
    });

});