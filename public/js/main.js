$('.alert-web i').on('click', function(){
    $('.alert-web').removeClass('current');
});
$( '.menu-user-click' ).click(function() {
    $( '.menu-list' ).toggleClass( "active" );
});
// $(document).ready(function(){
//     $(".nav-tabs a").click(function(){
//         $(this).tab('show');
//     });
// });
function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontents");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

function openpro(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tab-pane");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinkss");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
$('.your-class').owlCarousel({
    loop:true,
    margin:10,
    autoplay:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
$('.posts').owlCarousel({
    loop:true,
    margin:10,
    autoplay:2000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});




$('.title-form').click(function() {
	$('.title-form.active').removeClass('active');
	$(this).addClass('active');
  $('.formindex.active').removeClass('active');
  var tabNumber = $(this).attr('data-tab');
  var tabToOpen = ".formindex[data-tab='" + tabNumber + "']";
  $(tabToOpen).addClass('active');
})
var cleave = new Cleave('.mablagh', {
    numeral: true,
    numeralThousandsGroupStyle: 'thousand'
});

$( "#inlineCheckbox1" ).on( "click", function() {
  $( "#exampleFormControlInput1" ).html($( "#inlineCheckbox1:checked" ).val());
});
