<?php
require 'dbconfig.php';
if (!$conn){
die("Connection failed: ". mysqli_connect_error());
}
$query = "SELECT * FROM heroku_6b4d1af85eae168.specialistas INNER JOIN heroku_6b4d1af85eae168.lankytojas ON heroku_6b4d1af85eae168.specialistas.id=heroku_6b4d1af85eae168.lankytojas.Specialistas";
$init_result = mysqli_query($conn, $query);
if(isset($_GET['delete_id']))
{
$sql_query="DELETE FROM lankytojas WHERE id=".$_GET['delete_id'];
mysqli_query($conn, $sql_query);
header("Location: $_SERVER[PHP_SELF]");
}

if(isset($_POST['statusas-naujas']))
    {
        echo "<meta http-equiv='refresh' content='0'>";
    }
?>
    <script type="text/javascript">
        function delete_id(id) 
        {
            if (confirm('Ištrinti klientą')) 
            {
                if (confirm('Patvirtinkite dar kartą')) 
                {
                    window.location.href = 'aptarnavimas.php?delete_id=' + id;
                }
            }
        }
    </script>
    
<html>
    <head>
        <title>Specialisto Puslapis</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body class="bg-info" style="width:100%">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
            <div class="table-responsive" style="width:80%; margin-left:auto; margin-right:auto">
                <div class="table table-bordered table-striped table-hover">
                    <h2 class="text-center text-dark pt-2">Specialisto Puslapis</h2>
                    <hr>
                    <table class="table table-bordered table-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                                <th>Kontaktinis Numeris</th>
                                <th>Užduotis</th>
                                <th>Pabaigti iki</th>
                                <th>Kliento Statusas</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($row = mysqli_fetch_assoc($init_result)) {
                        ?>
                            <!--
                            <script> 
                                function change(id)
                                {
                                    var elem = document.getElementById("statusas"+id);
                                    if (elem.value=="priimti") elem.value = "baigti";
                                    else elem.style.visibility = "hidden";
                                    var x = document.getElementById("statusas"+id).name;
                                    var x = document.getElementById("statusas"+id).name="myname1";
                                } 
                            </script>
                            -->
                                <tr>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['id'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['Vardas'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['Pavarde'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['Telefonas'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['specialistas'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['endtime'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['Statusas'] ?> 
                                    </td>
                                    <td>
                                        <?php 
                                            if(isset($_POST[$row['mygtukas'].$row['id']])){
                                                $status_sql="UPDATE lankytojas SET Statusas = 'Aptarnauta' WHERE lankytojas.id =".$row['id'];
                                                $changestatus = mysqli_query($conn,$status_sql);
                                                $button_sql="UPDATE lankytojas SET mygtukas = 'baigti' WHERE lankytojas.id =".$row['id'];
                                                $changestatus = mysqli_query($conn,$button_sql);
                                                echo '<meta http-equiv="refresh" content="0">';
                                            }
                                        ?>
                                        <form name="<?=$row['id']?>" method="post" action="?">
                                           <input type="submit" name="<?=$row['mygtukas']?><?=$row['id']?>" value="<?=$row['mygtukas']?>" id="statusas<?=$row['id']?>">
                                        </form>    
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                         <a href="javascript:delete_id('<?php echo $row['id']; ?>')">
                                             <img src="img/trash.png" style="width:20px; height:20px"></a>
                                         </a>    
                                    </td>
                                    
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
        <script>
            $('table').DataTable({
                order: [
                    [3, 'desc']
                ],
                pagingType: 'full_numbers',
                scrollY: '50vh',
                scrollX: true,
                scrollCollapse: true,
                autoFill: true,
                stateSave: true,
            });
        </script>
    </body>
</html>