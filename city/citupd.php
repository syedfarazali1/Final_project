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
        $sql = "select * from cities where `ID` = $ID";
        $run =  mysqli_query($link,$sql);  
        $data = mysqli_fetch_array($run);

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['update'])) 
     {
    
    
            $NAME = $_POST['NAME'];
            $id = $_POST['id'];
           
         
    
        $link = new mysqli($servername, $username, $password, $dbname);
    
         $sql = "UPDATE `cities` SET `Name`='$NAME' WHERE id = $id";
         $result = mysqli_query($link, $sql);
            
         header("Refresh:0; url=Index.php");  
      }
    
    
     }

        ?>


        <form action="" method="post">
            <div class="mb-3">
                <input type="hidden" class="form-control" id="id" value="<?php echo $data[0]?>"
                    aria-describedby="emailHelp" name="id">
                <label for="NAME" class="form-label">NAME</label>
                <input type="text" class="form-control" id="NAME" value="<?php echo $data[1]?>"
                    aria-describedby="emailHelp" name="NAME">

                <br>
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
        </form> <br>

            <?php
                include "cityselect.php";
             ?>

        </tbody>
        </table>
    </div>
    <?php
include "../footer.php";
?>

</body>

