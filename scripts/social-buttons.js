$('.cal-social.custom-share.facebook').click(function(e){
    e.preventDefault();
    FB.ui({
        method: 'feed',
        name: $(this).attr('data-title'),
        caption: $(this).attr('data-caption'),
        description: $(this).attr('data-description'),
        link: $(this).attr('data-url'),
        picture: $(this).attr('data-image')
    });
});
