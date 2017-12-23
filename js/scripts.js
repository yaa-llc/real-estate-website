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
        console.log('hi');

        $('body').append('<div class="gallery-container"><a class="galleryClose" href="#">&times;</a><div class="flexslider"><ul class="slides"></ul></div></div>');
        $('.gallery-container').addClass('showGallery');

       var itemID = $(this).attr('data-id');
       $.ajax({
           url: '/wp-json/wp/v2/projects/' + itemID,
           success: function(data) {
               console.log(data);
               var galleryItems = data.acf.project_gallery;
               console.log(galleryItems);

               //$('.gallery-container').append('<div class="main-carousel"><h2>fill</h2></div>');

               jQuery.each(galleryItems, function(i,val) {
                    var imageURL = val.sizes.medium_large;
                    var imageAlt= val.alt;


                    $('.slides').append('<li><img src="' + imageURL + '" alt="' + imageAlt + '" class="inspiration-slider"></li>');
                   //$('.gallery-container').append('<div class="main-carousel"></div>').addClass('showGallery');

               });
               $('.flexslider').flexslider({
                   itemWidth: 500
               });

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

        //$('#hclc_map').appendTo('#dealer-locator-link');

        //$('#hclc_search_form').appendTo('#hclc_map');

    //$('.hc-mb3:first-child').prependTo('#locatoraid-map-list-container');
    //$('.hc-mb3:first-child').removeClass('.hc-mb3');
   // $('.hc-mb3:first-child .hc-mb3:nth-child(2)').wrap('<div class=""flex-child></div>');
    //$('.hc-mb3:first-child').addClass('flex-map-separate');
    //$('.hc-mb3:nth-child(2)').addClass('flex-map-separate');
    //$('.flex-map-separate').wrapAll('<div class="flex-item-final"></div>');
    //$('.flex-item-final').prependTo('.map-container');


    //jQuery("#master-featured-listing").detach().prependTo('#hclc_list')

})(jQuery);

