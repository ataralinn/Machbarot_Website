    
<?php
    include "header.php"; 
?>

 <div class='w3-main' style='margin-left:340px;margin-right:40px'>
   <div class='w3-container' id='subs' style='margin-top:75px'>
        <h1 class='w3-xxxlarge w3-text-dark-gray'><b>Subscription Form</b></h1>
        <hr style='width:50px;border:5px solid dark-gray' class='w3-round'>

        <form action='subs_response.php' method='post'>
            <div class='w3-section'>
                <label>Name</label>
                <input class='w3-input w3-border' type='text' name='Username' required>
            </div>
            <div class='w3-section'>
                <label>Email</label>
                <input class='w3-input w3-border' type='email' name='Email' required>
            </div>
            <button type='submit' class='w3-button w3-block w3-padding-large w3-light-grey w3-margin-bottom' name='submit' id='submitButton'>Subscribe</button>
        </form>
   </div>
</div>

    <?php include "footer.php";


     