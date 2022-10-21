<?php
    include "../connection.php";
    include "../header.php";
    ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['save'])) {
    
    
            $NAME = $_POST['NAME'];
            $Address = $_POST['Address'];
            $Ph_Num = $_POST['Ph_Num'];
            $Age = $_POST['Age'];
            $city = $_POST['city'];
            $Blood_Group = $_POST['Blood_Group'];
            $Email = $_POST['Email'];
            $Password = $_POST['Password'];
           
         
    
    $link = new mysqli($servername, $username, $password, $dbname);
    
    $sql = "INSERT INTO `patient`( `Name`, `Address`, `Ph_Num`, `Age`, `CIt_Id`, `Blood Group`, `Password`, `Email`) VALUES ('$NAME','$Address','$Ph_Num','$Age',$city,'$Blood_Group','$Email','$Password')";
     $result = mysqli_query($link, $sql);
            
     header("Refresh:0; url=patinsert.php");  
    }
    
    
    }



?>
<body>
  <?php include "../nav.php"; ?>
    <div class="container">
    
    <form action="patinsert.php" method="post">
        <div class="mb-3">

            <label for="NAME" class="form-label">NAME</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name="NAME">
            <label for="NAME" class="form-label">city</label>
            <select class="form-select" name="Spe_ID" >
                  <?php
                $sql = "select * from `cities`";
                $result = mysqli_query($link, $sql);
                 $num = mysqli_num_rows($result);?>

                     <?php
                    while ($res = mysqli_fetch_array($result)) { ?>
                     <option value=" <?php echo $res['ID'];?>">
                    <?php echo $res['Name'];?>
                        </option>
                     <?php   }
                       ?>

            </select>
            <label for="NAME" class="form-label">Blood Gorup</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name="Blood_Group"> 
            <label for="NAME" class="form-label">Email</label>
            <input type="text" name="Email" class="form-control"  aria-describedby="emailHelp" name="Blood_Group"> <label for="NAME" class="form-label">Password</label>
            <input type="text" name="Password" class="form-control"  aria-describedby="emailHelp" name="Blood_Group"> 
            <br>
            <button type="submit" name="save" class="btn btn-primary">Submit</button>
        </div>
    </form> <br>

</div>
<div class="container">
<?php
include "patselect.php";
?>
</div>

<?php
include "../footer.php";
?>

</body>

