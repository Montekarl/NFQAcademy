<?php
require 'dbconfig.php';
if (!$conn){
    die("Connection failed: ". mysqli_connect_error());
    }
        $query = "SELECT * FROM heroku_6b4d1af85eae168.specialistas INNER JOIN heroku_6b4d1af85eae168.lankytojas ON heroku_6b4d1af85eae168.specialistas.id=heroku_6b4d1af85eae168.lankytojas.Specialistas WHERE heroku_6b4d1af85eae168.lankytojas.Statusas='Klientas laukia' ORDER BY heroku_6b4d1af85eae168.lankytojas.id ASC LIMIT 20;";
        $init_result = mysqli_query($conn, $query);
        if(isset($_GET['delete_id']))
    {
        $sql_query="DELETE FROM heroku_6b4d1af85eae168.lankytojas WHERE id=".$_GET['delete_id'];
        mysqli_query($conn, $sql_query);
        header("Location: $_SERVER[PHP_SELF]");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Švieslentė</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="refresh" content="6; URL=">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/DTstyle.css"/> 
    </head>
    <body class="bg-info" style="width:100%">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <div>
            <div class="table-responsive" style="width:80%; margin-left:auto; margin-right:auto">
                <div class="table table-bordered table-striped table-hover">
                    <h2 class = "text-center text-dark pt-2">Švieslentė</h2>
                    <hr>
                    <table class="table table-bordered table-hover" style="width:100%;" id="example">
                        <thead>
                            <tr> 
                                <th>Vieta eilėje</th>
                                <th>Vardas</th>
                                <th>Specialistas</th>
                                <th>Atvykti už</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                while($row = mysqli_fetch_assoc($init_result)) {
                            ?>
                            <tr>
                                <td style="font-size: 14px; white-space: nowrap;">
                                    <?php echo $row['id'] ?>
                                </td>
                                <td style="font-size: 14px; white-space: nowrap;">
                                    <?php echo $row['Vardas'] ?>
                                </td>
                                <td style="font-size: 14px; white-space: nowrap;">
                                    <?php echo $row['specialistas'] ?>
                                </td>
                                <td style="font-size: 14px; white-space: nowrap;">
                                    <?php
                                    //Pasirinkti visus prieš tai buvusius klientus ir sudėti jų reikšmes
                                    //"SELECT SEC_TO_TIME( SUM(time_to_sec(trukme))) As timeSum FROM specialistas INNER JOIN lankytojas ON specialistas.id=lankytojas.Specialistas WHERE lankytojas.id<81 AND specialistas.specialistas=\'Saskaitos\'";
                                    $sql = "SELECT SEC_TO_TIME( SUM(time_to_sec(trukme))) As timeSum FROM specialistas INNER JOIN lankytojas ON specialistas.id=lankytojas.Specialistas WHERE lankytojas.id<" . $row['id']; // ." AND specialistas.specialistas='".$row['specialistas']."'";
                                    $queue_sql = mysqli_query($conn, $sql);
                                    while($queueing = mysqli_fetch_assoc($queue_sql)) {
                                        $trukme=$queueing['timeSum'];
                                        echo $trukme;
                                        /*$uzsiregistruota=$row['Registruota'];
                                        $duration=strtotime($trukme);
                                        $date=strtotime($row['Registruota']);
                                        $endtime=$date+$duration;
                                        echo date ('H:i:s',$endtime-time());*/
                                    }
                                    ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>   
        </div>
        <script>
            $('table').DataTable({
            order:[[3,'desc']],
            scrollY: '80vh',
            scrollX: true,
            scrollCollapse: true,
            autoFill:true,
            stateSave: true,
            });
        </script>
    </body>
</html>