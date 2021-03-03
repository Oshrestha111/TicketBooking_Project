<!doctype html>
<html>
<head>
<title>
    Revision 
</title>
</head>

<body> 
    <?php 
    //database sanga vaye required

    include('db/connection.php');
    ?>

    <table border=1 cellpadding = 5 cellspacing= 5 align=center width='600px' > 
        <?php
    //$_page = $_GET['q'];  //use isset when u use $get haru .. meaning-to check if the variable has been set in any page 
    if (isset($_GET['q'])){
            $_page =$_GET['q']; 
    }
    else{
        $_page='body';
    }
    echo "<tr><td>";
    include('Subpages/header.php');
    echo "</tr></td>";

    echo "<tr><td>";
    include('Subpages/menu.php');
    echo "</tr></td>";

    echo "<tr><td>";
    include("Subpages/$_page.php");
    echo "</tr></td>";

    echo"<tr><td>";
    include('Subpages/footer.php');
    echo "</tr></td>";
        ?>

    </table>
    
        <h1> Online Class </h1> 
</body>

</html>