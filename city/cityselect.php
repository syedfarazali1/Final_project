

<?php
include "../connection.php";
$sql = "select * from `cities`";
$result = mysqli_query($link, $sql);
$num = mysqli_num_rows($result);?>
<table class="table table-dark table-striped">
    <thead>
        <tr>

            <th >#</th>
            <th >First</th>
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
            <td>
                <?php echo $res['Name'];?>
            </td>
            <td>
                <button class="btn-primary btn-sm" name= "delete"> <a class="text-white" href="citdel.php?ID=<?php
            echo $res['ID'];?>"> Delete</a> </button>
           </td>
            <td>
                <button class="btn-primary"> <a class="text-white" href="citupd.php?ID=<?php
            echo $res['ID'];?>"> Update</a> </button>
            </td>
        </tr>

        <?php
    }


?>

    </tbody>
</table>