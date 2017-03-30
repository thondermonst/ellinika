$(function() {
    setImageGalleryWidth();

    $('#backward-scroller').on('click', scrollImagesBackward);

    $('#forward-scroller').on('click', scrollImagesForward);

    $('.images-container .images .image img').on('click', showFullImage);

    function setImageGalleryWidth() {
        var width = getWidth();

        $('.images').width(width);
        $('.images').css('visibility', 'visible');
    }

    function scrollImagesBackward() {
        var leftMargin = parseInt($('.images').css("margin-left"));
        if(leftMargin < 0) {
            var scroll = getScrollSize();
            $('.images').animate({"margin-left": leftMargin + scroll}, 400);
        }
    }

    function scrollImagesForward() {
        var leftMargin = parseInt($('.images').css("margin-left"));
        if(leftMargin > -parseInt($('.images').width()) + parseInt($('.images-container').width())) {
            var scroll = getScrollSize();
            $('.images').animate({"margin-left": leftMargin - scroll}, 400);
        }
    }

    function getScrollSize() {
        var width = getWidth();
        var numberOfImages = $('.images').children().length;

        return parseInt(width / numberOfImages);
    }

    function getWidth() {
        var width = 0;

        $('.images .image img').each(function() {
            width += $(this).outerWidth() + 6;
        });

        return width;
    }

    function showFullImage() {
        var src = $(this).attr('src');
        var img = '<img src="' + src + '" /><button id="close-full-image" class="btn btn-lg close" onclick="$(this).parent().hide();"><span class="glyphicon glyphicon-remove-circle"></span></button><button id="backward-full-image" class="btn btn-lg"><span class="glyphicon glyphicon-chevron-left"></button><button id="forward-full-image" class="btn btn-lg"><span class="glyphicon glyphicon-chevron-right"></button>';
        $('#full-image').html(img);
        $('#full-image').show();
    }
})
