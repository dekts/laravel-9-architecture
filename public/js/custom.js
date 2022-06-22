$(document).ready(function () {
    $('.spinner-btn').click(function () {
        $(this).html('<span class="spinner-border spinner-border-sm mr-2"></span>Loading...').attr('disabled', true);
    });
});
