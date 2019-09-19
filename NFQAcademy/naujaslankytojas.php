<?php
include_once 'dbconfig.php';

if(isset($_POST['btn-save']))
{
    $vardas = isset($_POST['Vardas']) ? mysqli_real_escape_string($conn,$_POST['Vardas']):false;
    $pavarde = isset($_POST['Pavarde']) ? mysqli_real_escape_string($conn,$_POST['Pavarde']):false;
    $telefornas = isset($_POST['Telefonas']) ? mysqli_real_escape_string($conn,$_POST['Telefonas']):false;

$sql_query = "INSERT INTO lankytojas(id,Vardas,Pavarde,Telefonas,Registruota) VALUES(NULL,'$vardas','$pavarde','$telefonas',NULL)";

if(mysqli_query($conn,$sql_query))
    {
       

if(mysqli_query($conn,$sql_query))
    {
        ?>
        <script type="text/javascript">
            window.location.href = 'naujaslankytojas.php';
        </script>
        <?php
    }        
 ?>

