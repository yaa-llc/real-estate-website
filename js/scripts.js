(function($) {

    //flickity init
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        adaptiveHeight: true,
        imagesLoaded: true
    });

    //make custom lightbox
     $('.wpupg-item').on('click', function(){
        //console.log('hi');

        $('body').append('<div class="gallery-container"><a class="galleryClose" href="#">&times;</a><div class="flexslider"><ul class="slides"></ul></div></div>');
        $('.gallery-container').addClass('showGallery');

       var itemID = $(this).attr('data-id');
       $.ajax({
           url: '/wp-json/wp/v2/projects/' + itemID,
           success: function(data) {
               //console.log(data);
               var galleryItems = data.acf.project_gallery;
               //console.log(galleryItems);


               jQuery.each(galleryItems, function(i,val) {
                    var imageURL = val.sizes.medium_large;
                    var imageAlt= val.alt;


                    $('.slides').append('<li><img src="' + imageURL + '" alt="' + imageAlt + '" class="inspiration-slider"></li>');
               });

               $('.flexslider').flexslider({});

               $('.galleryClose').on('click', function(e){
                   e.preventDefault();
                   $('.gallery-container').removeClass('showGallery');
                   $(this).parent().remove();
               })

           }
       })
    });

    //anything wuth sub menu has no clickable link
    $('.sub-menu').parent().find('a:first').removeAttr('href').css('cursor','default');


// Add smooth scrolling to all links
        $("a").on('click', function(event) {

// Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;

                });
            } // End if
        });

        //customizing the map
        $('#hclc_list').wrap('<div class="lpr-list-wrapper" id="local-distributor-list"></div>');

    $('#main').addClass('clearfix');

    $('#locatoraid-form-container, #dealer-locator-link').wrap('<div class="inner-wrapper"></div>');

    //$('#master-featured-listing').alert('ikkk);
    $('.lpr-location-name').on('click', function(){
        console.log('this bloody works');
    });

})(jQuery);

