<?php
if (isset($_GET['x']) && $_GET['x']==1){ 
        ?>
        <p style="color:green">Your Data is succesfully saved</p>;

    <?php
    }
        ?>
    <div> 
    <span>
    <form method=POST action='index.php?q=save'>
        <label> Enter Name: </label> 
        <br>
        <input type='text' id='fname' name='fname' placeholder='Write your name'>
        <br>
        <label> Email: </label> 
        <br>
        <input type='email' id='email' name='email' placeholder='Write your email'>
        <br>
        <label> Contact Number: </label> 
        <br>
        <input type='number' id='num' name='num' placeholder='Write your contact number'>
        <br>
        <label> Address:  </label> 
        <br>
        <input type='text' id='address' name='address' placeholder='Write your address'>
        <br>
        <label> Comment: </label> 
        <br>
        <textarea id='comment' name='comment' placeholder='Comment....'> </textarea>
        <br>
        <input type='submit' id='submit' name='submit' value='Submit'>

    </form>
    </span>
    </div>
    




