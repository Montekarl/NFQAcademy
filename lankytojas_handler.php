<?php
    require 'dbconfig.php';
    if(isset($_GET['vartotojas'])){
        
        $sql_query="SELECT * FROM specialistas INNER JOIN lankytojas ON specialistas.id=lankytojas.Specialistas WHERE lankytojas.id=".$_GET['vartotojas'];
        $result_set=mysqli_query($conn,$sql_query);
        $fetched_row=mysqli_fetch_assoc($result_set);
    }
?>
<html>
    <head>
        <title>Lankytojo Puslapis</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    </head>
    
    <body onload="final_countdown('<?=$fetched_row['endtime']?>')" class="bg-info" >
       
        <?php
       echo '<div align="center"><p style="margin-top:200px; font-size: 20px;">Jūsų apsilankymas už:</p><br><p id="countdown" style="font-size: 20px;">loading...</p></div><br>';
       
       ?>
        
    </body>
   
</html>
 