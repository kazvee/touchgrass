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

    $('.copy-btn').on('click', function () {
        const textToCopy = $(this).data('copy');
        if (!textToCopy) return;

        navigator.clipboard.writeText(textToCopy)
            .then(() => {
                $(this).text('Copied!');
                const btn = $(this);
                setTimeout(() => btn.text('Copy Info'), 1500);
            })
            .catch(err => {
                console.error('Failed to copy text: ', err);
            });
    });
});
