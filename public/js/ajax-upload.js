/*
    Ajax Upload By Qassim Hassan, wp-time.com
*/

$( function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#my-file").on('change', function (e) { // if file input value
        $("#file-wrap p").html(e.target.files[0].name); // change wrap message
    });

    $("#my-form").on('submit', function (e) { // if submit form

        $("#result").html('<img src="http://qass.im/drag-and-drop-upload-on-submit/ajax-loader.GIF">'); // display image loader in #result element
        var formData = new FormData($(this)[0]);

    });

});
