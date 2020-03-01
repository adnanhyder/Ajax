$(document).ready(function () {

    $("#UserPost").on('change', function () {
        var val = $(this).val();
        $(".loader").show();
        $.ajax({
            url: "fetch.php", //the page containing php script
            type: "post", //request type,
            dataType: 'json',
            data: {user_id: val},
            success: function (result) {
                if (result.posts.length > 0) {
                    var Postings = result.posts;
                    $(".mainposting").empty();
                    $(".mainposting").append(Postings);
                    $(".loader").hide();

                }
            }
        });
    });


});






