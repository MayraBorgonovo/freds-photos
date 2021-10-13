



// When document is ready:

$( document ).ready(function() {

    $( ".hamburger" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".hamburger" ).hide();
            $( ".cross" ).show();
        });
    });

    $( ".cross" ).click(function() {
        $( ".menu" ).slideToggle( "slow", function() {
            $( ".cross" ).hide();
            $( ".hamburger" ).show();
        });
    });

    $( ".dropdown ul" ).hide();
    $(".dropButton").click(function(){
        $(".dropdown ul").fadeToggle(); 
    });

    // run image cycler every 5s
    setInterval('cycleImages()', 5000);

    // load dark theme
    if(localStorage.getItem("changeMode") == "dark-mode") {
        $(document.body).addClass("dark-mode");
    }    

    //toggle light and dark themes
    $(".toggle").click(function(){
        var element = document.body;
        element.classList.toggle("dark-mode");

        
        if(document.body.classList.contains("dark-mode")){
            localStorage.setItem("changeMode", "dark-mode"); 
        } else {
            localStorage.setItem("changeMode", ""); 
        }
        
    });

});

// Functions

//Cycle fader images
function cycleImages(){
    var $active = $('#cycler .active');
    var $next = ($active.next().length > 0) ? $active.next() : $('#cycler img:first');
    $next.css('z-index',2);//move the next image up the pile
    $active.fadeOut(1500,function(){//fade out the top image
        $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
        $next.css('z-index',3).addClass('active');//make the next image the top one
    });
}

// Open Lightbox
function openModal() {
    document.getElementById("myModal").style.display = "block";
}
    
// Close Lightbox
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

//Slideshow controls
    
// Next/previous 
function plusSlides(n) {
    showSlides(slideIndex += n);
}
    
// Thumbnail image 
function currentSlide(n) {
    showSlides(slideIndex = n);
}
    
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");

    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex-1].style.display = "block";
}




