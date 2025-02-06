// navlink active
window.addEventListener('load', () => {
   
    var path = window.location.pathname;
    var page = path.split("/").pop();

    switch (page){
        case 'index.php':
        case '':
            $('#home').addClass('active');
            break;
        case 'about-us.php':
            $('#about-us').addClass('active');

            // minimizing faqs code
            var base = document.querySelector('#faqs-contain'); // the container for the variable content
            var selector = '.faq-q'; // any css selector for children

            base.addEventListener('click', function(event) {
                // find the closest parent of the event target that
                // matches the selector
                var closest = event.target.closest(selector);
                if (closest && base.contains(closest)) {

                    var showclose = closest;
                    var isShowFaqExist = $('.faq-q.showfaq');
                    
                    if(isShowFaqExist.length > 0){
                        // $('.faq-q').removeClass('showfaq'); //closing other faqs
                    }
                    showclose.classList.toggle('showfaq');
                }
            });
            break;
        case 'contact-us.php':
            $('#contact-us').addClass('active');
            break;
    }
    // aos
    AOS.init({
        duration: 700,
        easing: 'ease-in-out',
        once: false,
        mirror: false
    })
    // capitalize the first letter in input modal
    $('.to-upper').keyup(function(event) {
        var textBox = event.target;
        var start = textBox.selectionStart;
        var end = textBox.selectionEnd;
        textBox.value = textBox.value.charAt(0).toUpperCase() + textBox.value.slice(1);
        textBox.setSelectionRange(start, end);
    });

    // focus on load suites
    $('#suitesNaviDiv').focus();
});

// glightbox
var lightbox = GLightbox();
lightbox.on('open', (target) => {

});

// multiple glightbox classes to group individual slider
var lightboxDescription = GLightbox({
    selector: '.kingModalLightBox'
});
var lightboxDescription = GLightbox({
    selector: '.queenModalLightBox'
});
var lightboxDescription = GLightbox({
    selector: '.tripleModalLightBox'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox6'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox7'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox8'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox9'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox10'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox11'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox12'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox13'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox14'
});
var lightboxDescription = GLightbox({
    selector: '.glightbox15'
});
var lightboxVideo = GLightbox({
    selector: '.glightbox3'
});
var lightboxDescription = GLightbox({
    selector: '.SupModal'
});
var lightboxDescription = GLightbox({
    selector: '.ExeAModal'
});
var lightboxDescription = GLightbox({
    selector: '.ExeBModal'
});
var lightboxDescription = GLightbox({
    selector: '.DelxAModal'
});
var lightboxDescription = GLightbox({
    selector: '.DelxBModal'
});
var lightboxDescription = GLightbox({
    selector: '.StandardModal'
});
var lightboxDescription = GLightbox({
    selector: '.econSingleModal'
});
var lightboxDescription = GLightbox({
    selector: '.econDoubleModal'
});
var lightboxDescription = GLightbox({
    selector: '.econ1Modal'
});
var lightboxDescription = GLightbox({
    selector: '.econ2Modal'
});

// for facilities modal
var lightboxDescription = GLightbox({
    selector: '.EveModal'
});
var lightboxDescription = GLightbox({
    selector: '.CafeGModal'
});
var lightboxDescription = GLightbox({
    selector: '.CabanaGModal'
});
var lightboxDescription = GLightbox({
    selector: '.function1GModal'
});
var lightboxDescription = GLightbox({
    selector: '.function2GModal'
});
var lightboxDescription = GLightbox({
    selector: '.musicLoungeB'
});
var lightboxDescription = GLightbox({
    selector: '.musicLoungeC'
});
var lightboxDescription = GLightbox({
    selector: '.jhonlenonModal'
});
var lightboxDescription = GLightbox({
    selector: '.rihannaGModal'
});
var lightboxDescription = GLightbox({
    selector: '.madonnaGModal'
});
var lightboxDescription = GLightbox({
    selector: '.poolGmodal'
});
var lightboxDescription = GLightbox({
    selector: '.gymGmodal'
});
var lightboxDescription = GLightbox({
    selector: '.saunaGmodal'
});
var lightboxDescription = GLightbox({
    selector: '.skydeckGmodal'
});
var lightboxDescription = GLightbox({
    selector: '.massageGmodal'
});

lightboxVideo.on('slide_changed', ({ prev, current }) => {

    const { slideIndex, slideNode, slideConfig, player } = current;

    if (player) {
        if (!player.ready) {
            // If player is not ready
            player.on('ready', (event) => {
                // Do something when video is ready
            });
        }

        // player.on('play', (event) => {
        // });

        // player.on('volumechange', (event) => {
        // });

        // player.on('ended', (event) => {
        // });
    }
});

var lightboxInlineIframe = GLightbox({
    selector: '.glightbox4'
});

// owl carousel 
$('.index-carousel.owl-carousel').owlCarousel({
    loop: false,
    margin: 20,
    responsiveClass: true,
    responsive:{
        0:{
            items:1
        },
        800:{
            items:2
        },
        1350:{
            items:2
        },
        1400:{
            items:3
        }
    }
});

(function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')

    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
})()


// navigation dropdown
// executive
var exeli = document.getElementById('executiveLi');

exeli.addEventListener('click', function(){
    if ($(window).width() <= 991) {
        exeli.classList.toggle('dropend');
        exeli.classList.toggle('dropdown');
    }
    if ($(window).width() >= 992) {
        if(exeli.classList.contains('dropdown')){
            exeli.classList.toggle('dropend');
            exeli.classList.toggle('dropdown');
        }
    }
})

// deluxe
var dulx = document.getElementById('executiveLi2');

dulx.addEventListener('click', function(){
    if ($(window).width() <= 991) {
        dulx.classList.toggle('dropend');
        dulx.classList.toggle('dropdown');
    }
    if ($(window).width() >= 992) {
        if(dulx.classList.contains('dropdown')){
            dulx.classList.toggle('dropend');
            dulx.classList.toggle('dropdown');
        }
    }
})

// economy
var econy = document.getElementById('executiveLi3');

econy.addEventListener('click', function(){
if ($(window).width() <= 991) {
    econy.classList.toggle('dropend');
    econy.classList.toggle('dropdown');
}
if ($(window).width() >= 992) {
    if(econy.classList.contains('dropdown')){
        econy.classList.toggle('dropend');
        econy.classList.toggle('dropdown');
    }
}
})

var faciDrop = document.getElementById('facilitiessDrop');
var faciDropLi = document.getElementById('faciDropLi');
var funcSDrop = document.getElementById('funcSpacesDrop');
var hhMenu = document.getElementById('hhMenu');

faciDrop.addEventListener('click', ()=>{
    if($(window).width() <= 991){
        // dining
        // $('#diningFaci').removeClass('dropstart');
        // $('#diningFaci').addClass('dropend');

        // function spaces
        // $('#funcSpacesDrop').removeClass('dropstart');
        // $('#funcSpacesDrop').addClass('dropend');

        // wellness
        // $('#wellnessFaci').removeClass('dropstart');
        // $('#wellnessFaci').addClass('dropend');
    }
    if($(window).width() > 991){
        // dining
        // $('#diningFaci').addClass('dropstart');
        // $('#diningFaci').removeClass('dropend');
 
        // function spaces
        // $('#funcSpacesDrop').addClass('dropstart');
        // $('#funcSpacesDrop').removeClass('dropend');

        // wellness
        // $('#wellnessFaci').addClass('dropstart');
        // $('#wellnessFaci').removeClass('dropend');

        // main faci dropdown
        $('#faciDropLi').addClass('dropdown');
        $('#faciDropLi').removeClass('dropend');
    }
})


funcSDrop.addEventListener('click', ()=>{
    if($(window).width() <= 991){
        
        // music lounge 1
        $('#musicLDrop1').removeClass('dropstart');
        $('#musicLDrop1').addClass('dropend');

        // music lounge 2
        $('#musicLDrop2').removeClass('dropstart');
        $('#musicLDrop2').addClass('dropend');
    }

    if($(window).width() > 991){
        // music lounge 1
        $('#musicLDrop1').addClass('dropstart');
        $('#musicLDrop1').removeClass('dropend');

        // music lounge 2
        $('#musicLDrop2').addClass('dropstart');
        $('#musicLDrop2').removeClass('dropend');
    }
})

hhMenu.addEventListener('click', ()=> {
    if($(window).width() <= 991){
        // suites dropdown
        $('#suitesDropLi').removeClass('dropdown');
        $('#suitesDropLi').addClass('dropend');

        // facilities dropdown
        $('#faciDropLi').removeClass('dropdown');
        $('#faciDropLi').addClass('dropend');
    }
    if($(window).width() > 991){
         // suites dropdown
        $('#suitesDropLi').addClass('dropdown');
        $('#suitesDropLi').removeClass('dropend');

        // facilities dropdown
        $('#faciDropLi').addClass('dropdown');
        $('#faciDropLi').removeClass('dropend');
    }
})

// suites dropdown
var suitesDrop = document.getElementById('suitesDrop');
var suitesDropLi = document.getElementById('suitesDropLi');
suitesDrop.addEventListener('click', ()=>{
    if($(window).width() > 991){
        $('#suitesDropLi').addClass('dropdown');
        $('#suitesDropLi').removeClass('dropend');
    }
})

// modal test
$('.suites-modal').on('show.bs.modal', function () {
    // suites modal carousel
    $('.king-carousel.owl-carousel').owlCarousel({
        loop: true,
        margin: 6,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 2500,
        mouseDrag: false,
        touchDrag: false,
        nav: true,
        dots: false,
        navText: [
            "<i class='fa-solid fa-chevron-left'></i>",
            "<i class='fa-solid fa-chevron-right'></i>"
        ],
        responsiveClass: true,
        responsive:{
            0:{
                items:2 
            },
            400:{
                items:3
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
});

// modal
// open
$(window).on('shown.bs.modal', function() { 
    setTimeout(() => {
        $('.loader-images-modal').css({'display':'none'});
        $('.modal-img-container').css({'opacity':'1'});
    }, 500);
});
// close
$(window).on('hidden.bs.modal', function() { 
    $('.loader-images-modal').css({'display':'flex'});
    $('.modal-img-container').css({'opacity':'0'});
});

$(function(){
    // year footer
    const d = new Date();
    let year = d.getFullYear();
    document.getElementById("yearF").innerHTML = year;
});