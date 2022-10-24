

<?php
include "../connection.php";

$sql = "select * from `doctor`";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);?>
<body>
<table class="table table-dark table-striped">
    <thead>
        <tr>

            <th >#</th>
            <th >Dr_Name</th>
            <th >Specialist</th>
            <th >Time</th>
            <th >Days</th>
            <th >City</th>
            <th >Avaible_Status</th>
            <th >Picture</th>
            <th colspan="2">Action</th>
            

        </tr>
    </thead>
    <tbody>

        <?php
    while ($res = mysqli_fetch_array($result)) {
    ?>
        <tr>
            <th >
                <?php echo $res['ID'];?>
            </th>
            <td> Dr
                <?php echo $res['Dr_Name'];?>
            </td>
              <td>
                <?php echo $res['Spe_ID'];?>
            </td>         <td>
                <?php echo $res['Timing'];?>
            </td>         <td>
                <?php echo $res['Days'];?>
            </td>         <td>
                <?php 
              echo $res['Cit_ID'];
                ?>
            </td>     
               <td>
                <?php echo $res['Avaible_Status'];?>
            </td>   
                 <td>
                <?php echo $res['Pic'];?>
            </td>
          
            <td>
                <button class="btn-primary btn-sm" name= "delete"> <a class="text-white" href="docdele.php?ID=<?php
            echo $res['ID'];?>"> Delete</a> </button>
           </td>
            <td>
                <button class="btn-primary"> <a class="text-white" href="docupd.php?ID=<?php
            echo $res['ID'];?>"> Update</a> </button>
            </td>
        </tr>

        <?php
    }


?>

    </tbody>
</table>


</body>