<?php include_once("inc/header.php"); ?>


<div class="container-fluid">
    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/sporting/Kayak.jpg" alt="Kayak" onclick="openModal();currentSlide(1)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Kayak</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/sporting/Mountain Biking.jpg" alt="Mountain Biking" onclick="openModal();currentSlide(2)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Mountain Biking</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/sporting/Snowboard.jpg" alt="Snowboard" onclick="openModal();currentSlide(3)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Snowboard</div>
            </div>		
        </div>
        
    </div>

    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/sporting/Soccer.jpg" alt="Soccer" onclick="openModal();currentSlide(4)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Soccer</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/sporting/Surf blue.jpg" alt="Surfboarder from avobe" onclick="openModal();currentSlide(5)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Surf Wave</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/sporting/Surf.jpg" alt="Surf" onclick="openModal();currentSlide(6)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Surf</div>
            </div>		
        </div>
        
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="closeModal cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides">
            <img src="images/sporting/Kayak.jpg" class="image" alt="Kayak">
        </div>

        <div class="mySlides">
            <img src="images/sporting/Mountain Biking.jpg" class="image" alt="Mountain Biking">
        </div>

        <div class="mySlides">
            <img src="images/sporting/Snowboard.jpg" class="image" alt="Snowboard">
        </div>

        <div class="mySlides">
            <img src="images/sporting/Soccer.jpg" class="image" alt="Soccer">
        </div>

        <div class="mySlides">
            <img src="images/sporting/Surf blue.jpg" class="image" alt="Surf blue">
        </div>

        <div class="mySlides">
            <img src="images/sporting/Surf.jpg" class="image" alt="Surf">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
    
<?php include_once("inc/footer.php"); ?>