<?php
include "../connection.php";
include "../header.php";
?>

<body>
  <?php include "../nav.php"; ?>
    <div class="container">
    
<form action="/HOSPITAL/city/insertcity.php" method= "post">
  <div class="mb-3">
 
    <label for="NAME" class="form-label">NAME</label>
    <input type="text" class="form-control" id="NAME" aria-describedby="emailHelp" name="NAME"> 
  
<br>
  <button type="submit" name="save" class="btn btn-primary">Submit</button>
</div>
</form>  <br>

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

