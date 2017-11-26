// $(document).ready(function($){
//     $('.grid').isotope({
//         // options
//         itemSelector: '.isotope-item',
//         layoutMode: 'fitRows'
//     });
// })(jQuery);

$(document).ready(function($){
    var randomName, randomSection, classname, $filterByName, $filterBySection, $sortByNumber;
    var names = ['Andy Smith', 'Betty Rubble', 'Chris Jones', 'Donna Summer', 'Edward Young', 'Freya Parr'];
    var sections = ['Mentions', 'Tweets', 'Insights', 'Announcements', 'Social Insights', 'Trends'];

    $sortByNumber = $('#sort-by-number');
    $filterByName = $('#filter-by-name');
    $filterByName.append('<option value="">Show all</option>');
    $filterBySection = $('#filter-by-section');
    $filterBySection.append('<option value="">Show all</option>');

    for (var i=200; i>0; i--) {
        randomName = names[Math.floor(Math.random()*names.length)];
        randomSection = sections[Math.floor(Math.random()*sections.length)];
        classname = 'name-' + _.kebabCase(randomName) + ' ' + 'section-' + _.kebabCase(randomSection);
        $('#container').append('<div class="item '+classname+'" data-number="'+i+'"><h3 class="number">'+i+'</h3><h3>'+randomName+'</h3><h3>'+randomSection+'</h3></div>');
    }
    var name;
    for (var i=0; i<names.length; i++) {
        name = names[i];
        classname = 'name-' + _.kebabCase(name);
        $filterByName.append('<option value=".'+classname+'">'+name+'</option>');
    }
    var section;
    for (var i=0; i<sections.length; i++) {
        section = sections[i];
        classname = 'section-' + _.kebabCase(section);
        $filterBySection.append('<option value=".'+classname+'">'+section+'</option>');
    }






    var itemReveal = Isotope.Item.prototype.reveal;
    Isotope.Item.prototype.reveal = function() {
        itemReveal.apply( this, arguments );
        $( this.element ).removeClass('isotope-hidden');
    };

    var itemHide = Isotope.Item.prototype.hide;
    Isotope.Item.prototype.hide = function() {
        itemHide.apply( this, arguments );
        $( this.element ).addClass('isotope-hidden');
    };



    var $container = $('#container');
    $container.isotope({
        itemSelector: '.item',
        layoutMode: 'fitRows',
        getSortData: {
            number: '.number parseInt'
        }
    });
    $(document).on('change', '#sort-by-number, #filter-by-name, #filter-by-section', function() {
        var sortStr = $sortByNumber.val();
        var filterStr = $filterByName.val() + $filterBySection.val();
        var sortAscending;
        if ($sortByNumber.val() === 'ascending') {
            sortAscending = true;
        } else {
            sortAscending = false;
        }
        console.log('------------------------');
        console.log('sortStr:', sortStr);
        console.log('filterStr:', filterStr);
        $container.isotope({
            filter: filterStr,
            sortBy : 'number',
            sortAscending : sortAscending
        });
    });


})(jQuery);