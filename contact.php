<?php 
    session_start();
    include_once("inc/header.php");
?>

<div class="container-fluid">
    <?php 
        if (isset($_SESSION['errors'])) { # Display error message if any errors are found.
            echo "<div class='alert alert-danger alert-dismissible'>";
            echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            for ($errorCount = 0; $errorCount < count($_SESSION['errors']); $errorCount++) {
            echo "<p>" . $_SESSION['errors'][$errorCount] . "</p>";
            }
            echo "</div>";
            unset($_SESSION['errors']);
        } 

        if (isset($_GET['sts'])) { # Display success message if form is sent.
            echo "<div class='alert alert-success alert-dismissible'>";
            echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
            echo "<p>Thank you! Your message has been sent.</p>";
            echo "</div>";
        }
    ?>

    <div class="row">
    
        <div class="contact1 col-md-5">
            <form action="processing/contactproc.php" method="post">  
                <h1>Contact Us</h1>
                <input type="text" name="name" id="name" placeholder="Name" pattern="[A-zA-z\s]+" title="Only letters and whitespace allowed" required><br>
                <input type="email" name="emailAddress" id="emailAddress" placeholder="Email address" required><br>
                <select required name="interests" id="interests">
                    <option value="" disabled selected hidden>Interests</option>
                    <option value="portrait">Portrait</option>
                    <option value="nature">Nature</option>
                    <option value="sporting">Sporting</option>
                    <option value="event">Event</option>
                </select><br>
                <textarea required id="enquiry" name="message" rows="4" placeholder="Comments or message" ></textarea><br>
                <input type="submit" value="Submit">
            </form>
        </div>

        <div class="contact2 col-md-7">
            <iframe src="https://www.youtube.com/embed/G393z8s8nFY" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    
            <h2>Our Location</h2>    
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d424146.10300325596!2d150.65177960941722!3d-33.8473566513892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b129838f39a743f%3A0x3017d681632a850!2sSydney%20NSW!5e0!3m2!1sen!2sau!4v1618990546702!5m2!1sen!2sau" title="Location Map" allowfullscreen="" loading="lazy"></iframe>

        </div>
    </div>
</div>

<?php include_once("inc/footer.php"); ?>