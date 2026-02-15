$(document).ready(function () {
    $('#theme-toggle').on('click', function () {
        const currentTheme = $('body').attr('data-theme');
        if (currentTheme === 'dark') {
            $('body').removeAttr('data-theme');
            $(this).text('🌚 Dark Mode');
        } else {
            $('body').attr('data-theme', 'dark');
            $(this).text('🌞 Light Mode');
        }
    });
});
