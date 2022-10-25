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
        $sql = "select * from doctor where `ID` = $ID";
        $run =  mysqli_query($link,$sql);  
        $data = mysqli_fetch_array($run);

     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     if (isset($_POST['update'])) 
     {
    $ID = $_POST['ID'];
        
        $Dr_Name = $_POST['Dr_Name'];
        $Spe_ID = $_POST['Spe_ID'];
        $Timing = $_POST['Timing'];
        $Days = $_POST['Days'];
        $Cit_ID = $_POST['Cit_ID'];
        $Avaible_Status = $_POST['Avaible_Status'];
        $filename = $_FILES['Pic']["name"];
        $tempname = $_FILES['Pic']["tmp_name"];
        $picsize = $_FILES['Pic']["size"];
        $pictype = $_FILES['Pic']["type"];
        move_uploaded_file($tempname,"images/".$filename);
        
           
           
         
    
        $link = new mysqli($servername, $username, $password, $dbname);
    
  $sql = "UPDATE `doctor` SET `Dr_Name`='$Dr_Name',`Spe_ID`='$Spe_ID',`Timing`='$Timing',`Days`='$Days',`Cit_ID`='$Cit_ID',`Avaible_Status`='$Avaible_Status',`Pic`='$filename' WHERE id= $ID";
       
     $result = mysqli_query($link, $sql);

         header("Refresh:0; url=docinsert.php");  
      }
    
    
     }

        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="hidden" class="form-control" aria-describedby="emailHelp" value="<?php echo $data[0]?>"
                    name="ID">
                <label for="NAME" class="form-label">Dr NAME</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" value="<?php echo $data[1]?>"
                    name="Dr_Name">
                <label for="NAME" class="form-label">Specialist</label>
                <select class="form-select" name="Spe_ID">
                   <option selected value="<?php echo $data[2]?>"></option>
                   <?php
                $sql = "select * from `specialist`";
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
                <label for="NAME" class="form-label">Time</label>
                <input type="time" class="form-control" aria-describedby="emailHelp" value="<?php echo $data[3]?>"
                    name="Timing">
                <label for="NAME" class="form-label">Days</label>
                <input class="form-control" aria-describedby="emailHelp" value="<?php echo $data[4]?>">
                <div class="form-check">
                    <input class="form-check-input" value="MWF" type="radio" name="Days">
                    <label class="form-check-label">
                        MWF
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="TTS" type="radio" name="Days" checked>
                    <label class="form-check-label">
                        TTS </label>
                </div>
                <label for="NAME" class="form-label">city</label>
                <select class="form-select" name="Cit_ID">

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
                <label for="NAME" class="form-label">Avaible Status</label>
                <div class="form-check">
                    <input class="form-check-input" value="Active" type="radio" name="Avaible_Status" >
                    <label class="form-check-label" for="flexRadioDefault1">
                        Active
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="Deactive" type="radio" name="Avaible_Status"  checked>
                    <label class="form-check-label" >
                        DeActive
                    </label>
                </div>
           
                <label for="NAME" class="form-label">Images</label>
               <br>
                    <img height="30px" width="30px" src="images/<?php echo $data[7]?>" alt="<?php echo $data[7]?>"> <br>
                    <input name="Pic"  type="file">
                <br>
                <br>
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
        </form> <br>

        <br>

        <?php
                include "docselect.php";
             ?>

        </tbody>
        </table>
    </div>
    <?php
include "../footer.php";
?>

</body>