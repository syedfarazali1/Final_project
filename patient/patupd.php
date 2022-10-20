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
        $sql = "select * from patient where `ID` = $ID";
        $run =  mysqli_query($link,$sql);  
        $data = mysqli_fetch_array($run);

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['update'])) 
     {
        $ID = $_POST['ID'];
        $NAME = $_POST['NAME'];
        $Address = $_POST['Address'];
        $Ph_Num = $_POST['Ph_Num'];
        $Age = $_POST['Age'];
        $city = $_POST['city'];
        $Blood_Group = $_POST['Blood_Group'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
           
           
         
    
        $link = new mysqli($servername, $username, $password, $dbname);
    
         $sql = "UPDATE `patient` SET `Name`='$NAME',`Address`='$Address',`Ph_Num`='$Ph_Num',`Age`='$Age',`CIt_Id`='$city',`Blood Group`='$Blood_Group',`Password`='$Password',`Email`='$Email' WHERE id= $ID";
         $result = mysqli_query($link, $sql);
            
         header("Refresh:0; url=patinsert.php");  
      }
    
    
     }

        ?>
 <form action="" method="post">
        <div class="mb-3">
            <input type="hidden" class="form-control"  aria-describedby="emailHelp" value="<?php echo $data[0]?>" name="ID">
            <label for="NAME" class="form-label">NAME</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" value="<?php echo $data[1]?>" name="NAME">
            <label for="NAME" class="form-label">Address</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" value="<?php echo $data[2]?>" name="Address">
            <label for="NAME" class="form-label">Phone</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" value="<?php echo $data[3]?>" name="Ph_Num"> <label
                for="NAME" class="form-label">Age</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" value="<?php echo $data[4]?>" name="Age">
            <label for="NAME" class="form-label">city</label>
            <select class="form-select" name="city" >
                <!-- <option selected disable value="<?php echo $data[5]?> "><?php echo $data[5]?></option> -->
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
            <input type="text" class="form-control" value="<?php echo $data[6]?>"  aria-describedby="emailHelp" name="Blood_Group"> 
            <label for="NAME" class="form-label">Email</label>
            <input type="text" name="Email" value="<?php echo $data[7]?>" class="form-control"  aria-describedby="emailHelp" name="Blood_Group"> <label for="NAME" class="form-label">Password</label>
            <input type="text" name="Password" class="form-control" value="<?php echo $data[8]?>" aria-describedby="emailHelp" name="Blood_Group"> 
            <br>
            <button type="submit" name="update" class="btn btn-primary">Submit</button>
        </div>
    </form> <br>

         <br>

            <?php
                include "patselect.php";
             ?>

        </tbody>
        </table>
    </div>
    <?php
include "../footer.php";
?>

</body>

