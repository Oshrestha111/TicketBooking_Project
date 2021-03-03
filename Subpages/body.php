
<?php 
    $query = "Select * from tbl_content where link='Home'";

    $compile=mysqli_query($con,$query);

    if ($compile) { //execute matra garxa

        $row=mysqli_fetch_row($compile); //data tanera print garxa only used in select 

        // row array ho
        //array print garna print_r
        //
        
        //print_r($row);
        ?>

        <h3> <?php echo $row[1] ; //title ?> </h3>

        <div>  <?php echo $row[2] ; //content ?>
        
        
        </div> 

    <?php
    //compile huda matra data aauxa 
    }
    ?>




