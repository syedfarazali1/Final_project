<?php
    include "../connection.php";
    include "../header.php";
    ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['save'])) {
    
    
            $NAME = $_POST['NAME'];
         
         
    
    $link = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "INSERT INTO `specialist`(`Name`) VALUES ('$NAME')";
     $result = mysqli_query($link, $sql);
            
     header("Refresh:0; url=specinsert.php");  
    }
    
    
    }



?>
<body>
  <?php include "../nav.php"; ?>
    <div class="container">
    
    <form action="" method="post">
        <div class="mb-3">

            <label for="NAME" class="form-label">Specialist</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name="NAME">
            <br>
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
        </div>
    </form> <br>

</div>
<div class="container">
<?php
include "specselect.php";
?>
</div>

<?php
include "../footer.php";
?>

</body>

