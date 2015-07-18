$(document).ready(function () {
    $('#js-success').text('JavaScript file linked successfully.');
    $('#ajax-test-button').click(function () {
        $('#ajax-success').load('loaded.php');
    });
});
