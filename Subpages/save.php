<?php
extract($_POST);

$query="insert into tbl_contact(Name,Email,Contact,Address,Comment)
values('$fname','$email','$num','$address','$comment')";
    $compile=mysqli_query($con,$query);

    if ($compile) {
        $save=1;
        header('Location:index.php?q=contact&x=1');
        # code...
    }
    
?>