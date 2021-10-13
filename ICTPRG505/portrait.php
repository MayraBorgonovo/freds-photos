<?php include_once("inc/header.php"); ?>


<div class="container-fluid">
    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/portrait/Boy.jpg" alt="Boy" onclick="openModal();currentSlide(1)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Boy</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/portrait/Colours.jpg" alt="Colours" onclick="openModal();currentSlide(2)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Colours</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/portrait/Dog.jpg" alt="Dog" onclick="openModal();currentSlide(3)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Dog</div>
            </div>		
        </div>
        
    </div>

    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/portrait/Siblings.jpg" alt="Siblings" onclick="openModal();currentSlide(4)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Siblings</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/portrait/Owl.jpg" alt="Owl" onclick="openModal();currentSlide(5)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Owl</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/portrait/Woman.jpg" alt="Woman" onclick="openModal();currentSlide(6)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Woman</div>
            </div>		
        </div>
        
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="closeModal cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides">
            <img src="images/portrait/Boy.jpg" class="image" alt="Boy">
        </div>

        <div class="mySlides">
            <img src="images/portrait/Colours.jpg" class="image" alt="Colours">
        </div>

        <div class="mySlides">
            <img src="images/portrait/Dog.jpg" class="image" alt="Dog">
        </div>

        <div class="mySlides">
            <img src="images/portrait/Siblings.jpg" class="image" alt="Siblings">
        </div>

        <div class="mySlides">
            <img src="images/portrait/Owl.jpg" class="image" alt="Owl">
        </div>

        <div class="mySlides">
            <img src="images/portrait/Woman.jpg" class="image" alt="Woman">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
    
<?php include_once("inc/footer.php"); ?>