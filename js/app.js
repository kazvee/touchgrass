$(document).ready(function () {
    $('#theme-toggle').on('click', function () {
        const body = $('body');
        const icon = $('#theme-icon');

        if (body.attr('data-theme') === 'dark') {
            body.removeAttr('data-theme');
            icon.attr('src', 'assets/img/theme-dark.png');
        } else {
            body.attr('data-theme', 'dark');
            icon.attr('src', 'assets/img/theme-light.png');
        }
    });
});
