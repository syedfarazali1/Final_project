<?php
include "../header.php";
?>

<body>
    <?php include "../nav.php"; ?>
    <div class="container">


        <?php
include "../connection.php";
$link = new mysqli($servername, $username, $password, $dbname);
        $ID = $_GET['ID'];       
        $sql = "select * from specialist where `ID` = $ID";
        $run =  mysqli_query($link,$sql);  
        $data = mysqli_fetch_array($run);

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['update'])) 
     {
        $ID = $_POST['ID'];
        $NAME = $_POST['NAME'];       
    
        $link = new mysqli($servername, $username, $password, $dbname);
    
         $sql = "UPDATE `specialist` SET `Name`='$NAME'WHERE id= $ID";
         $result = mysqli_query($link, $sql);
            
         header("Refresh:0; url=specinsert.php");  
      }
    
    
     }

        ?>
 <form action="" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control"  aria-describedby="emailHelp" value="<?php echo $data[0]?>" name="ID">
            <label for="NAME" class="form-label">NAME</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" value="<?php echo $data[1]?>" name="NAME">
           
            <br>
            <button type="submit" name="update" class="btn btn-primary">Submit</button>
        </div>
    </form> <br>

         <br>

            <?php
                include "specselect.php";
             ?>

        </tbody>
        </table>
    </div>
    <?php
include "../footer.php";
?>

</body>

