<?php
    include "../connection.php";
    include "../header.php";
    ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['save'])) {
    
    
            $Dr_Name = $_POST['Dr_Name'];
            $Spe_ID = $_POST['Spe_ID'];
            $Timing = $_POST['Timing'];
            $Days = $_POST['Days'];
            $Cit_ID = $_POST['Cit_ID'];
            $Avaible_Status = $_POST['Avaible_Status'];
            $Pic = $_POST['Pic'];
         
           
         
    
    $link = new mysqli($servername, $username, $password, $dbname);
    
 $sql = "INSERT INTO `doctor`( `Dr_Name`, `Spe_ID`, `Timing`, `Days`, `Cit_ID`, `Avaible_Status`,  `Pic`) VALUES ('$Dr_Name','$Spe_ID','$Timing','$Days',$Cit_ID,'$Avaible_Status','$Pic')";
     $result = mysqli_query($link, $sql);
            
  
    }
    
    
    }



?>

<body>
    <?php include "../nav.php"; ?>
    <div class="container">

        <form action="" method="post">
            <div class="mb-3">

                <label for="NAME" class="form-label">Dr_NAME</label>
                <input type="text" class="form-control" aria-describedby="emailHelp" name="Dr_Name">
                <label for="NAME" class="form-label">Specialist</label>
                <select class="form-select" name="Spe_ID">
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
                <label for="NAME" class="form-label">Timing</label>
                <input type="time" class="form-control" aria-describedby="emailHelp" name="Timing">
                <label for="NAME" class="form-label">Days</label>
                <div class="form-check">
                    <input class="form-check-input" value="MWF" type="radio" name="Days" >
                    <label class="form-check-label" >
                        MWF
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" value="TTS" type="radio" name="Days"  checked>
                    <label class="form-check-label" >
                        TTS </label>
                </div>
                <label for="NAME" class="form-label">Specialist</label>
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
                <p>Status:</p>
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

                <label for="">Image</label> <br>
                <input name="Pic" type="text"> <br> <br>
                <button type="submit" name="save" class="btn btn-primary">Submit</button>
            </div>
        </form> <br>

    </div>
    <div class="container">
        
        <?php
        include "docselect.php";
            ?>
    </div>

    <?php
include "../footer.php";
?>

</body>