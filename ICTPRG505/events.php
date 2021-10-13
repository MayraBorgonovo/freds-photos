<?php include_once("inc/header.php"); ?>


<div class="container-fluid">
    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/events/Champagne.jpg" alt="Champagne" onclick="openModal();currentSlide(1)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Champagne</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/events/Fairground.jpg" alt="Fairground" onclick="openModal();currentSlide(2)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Fairground</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/events/Fireworks.jpg" alt="Fireworks" onclick="openModal();currentSlide(3)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Fireworks</div>
            </div>		
        </div>
        
    </div>

    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/events/Toast.jpg" alt="Toast" onclick="openModal();currentSlide(4)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Toast</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/events/Wedding Aisle.jpg" alt="Wedding Aisle" onclick="openModal();currentSlide(5)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Wedding Aisle</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/events/Wedding.jpg" alt="Wedding" onclick="openModal();currentSlide(6)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Wedding</div>
            </div>		
        </div>
        
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="closeModal cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides">
            <img src="images/events/Champagne.jpg" class="image" alt="Champagne">
        </div>

        <div class="mySlides">
            <img src="images/events/Fairground.jpg" class="image" alt="Fairground">
        </div>

        <div class="mySlides">
            <img src="images/events/Fireworks.jpg" class="image" alt="Fireworks">
        </div>

        <div class="mySlides">
            <img src="images/events/Toast.jpg" class="image" alt="Toast">
        </div>

        <div class="mySlides">
            <img src="images/events/Wedding Aisle.jpg" class="image" alt="Wedding Aisle">
        </div>

        <div class="mySlides">
            <img src="images/events/Wedding.jpg" class="image" alt="Wedding">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
    
<?php include_once("inc/footer.php"); ?>