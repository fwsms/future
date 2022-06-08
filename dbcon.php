<?php
$server = "localhost";
$user = "root";
$password ="";
$db = "fwsm_inquery";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>
        alert("Connected FWSM")
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Plese Check Your Internet Connection!")
    </script>
    <?php
}
?>