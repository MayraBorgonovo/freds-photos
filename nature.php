<?php include_once("inc/header.php"); ?>


<div class="container-fluid">
    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/nature/Butterfly.jpg" alt="Butterfly" onclick="openModal();currentSlide(1)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Butterfly</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/nature/Pebbles.jpg" alt="Pebbles" onclick="openModal();currentSlide(2)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Pebbles</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/nature/Sea Turtle.jpg" alt="Sea Turtle" onclick="openModal();currentSlide(3)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Sea Turtle</div>
            </div>		
        </div>
        
    </div>

    <div class="row lightbox">

        <div class="imgContainer col-md-4">
            <img src="images/nature/Storm.jpg" alt="Storm" onclick="openModal();currentSlide(4)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Storm</div>
            </div>	
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/nature/Tree.jpg" alt="Tree" onclick="openModal();currentSlide(5)" class="image hover-shadow"/>		
            <div class="middle">
                <div class="text">Tree</div>
            </div>
        </div>
        <div class="imgContainer col-md-4">
            <img src="images/nature/Yellow Macaw.jpg" alt="Yellow Macaw" onclick="openModal();currentSlide(6)" class="image hover-shadow"/>
            <div class="middle">
                <div class="text">Yellow Macaw</div>
            </div>		
        </div>
        
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
    <span class="closeModal cursor" onclick="closeModal()">&times;</span>
    <div class="modal-content">
        <div class="mySlides">
            <img src="images/nature/Butterfly.jpg" class="image" alt="Butterfly">
        </div>

        <div class="mySlides">
            <img src="images/nature/Pebbles.jpg" class="image" alt="Pebbles">
        </div>

        <div class="mySlides">
            <img src="images/nature/Sea Turtle.jpg" class="image" alt="Sea Turtle">
        </div>

        <div class="mySlides">
            <img src="images/nature/Storm.jpg" class="image" alt="Storm">
        </div>

        <div class="mySlides">
            <img src="images/nature/Tree.jpg" class="image" alt="Tree">
        </div>

        <div class="mySlides">
            <img src="images/nature/Yellow Macaw.jpg" class="image" alt="Yellow Macaw">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
</div>
    
<?php include_once("inc/footer.php"); ?>