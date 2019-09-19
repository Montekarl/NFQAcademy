<?php
require 'dbconfig.php';
if (!$conn){
die("Connection failed: ". mysqli_connect_error());
}
$query = "SELECT * FROM specialistas INNER JOIN lankytojas ON specialistas.id=lankytojas.Specialistas";
$init_result = mysqli_query($conn, $query);
if(isset($_GET['delete_id']))
{
$sql_query="DELETE FROM lankytojas WHERE id=".$_GET['delete_id'];
mysqli_query($conn, $sql_query);
header("Location: $_SERVER[PHP_SELF]");
}
?>
    <script type="text/javascript">
        function book_viewing(id) {
            window.location.href = 'viewing_lettings_handler.php?book_viewing=' + id;
        }

        function edt_id(id) {
            window.location.href = 'edit_data.php?edit_id=' + id;
        }

        function property_match(id) {
            window.location.href = 'property_matcher_lettings.php?property_match=' + id;
        }

        function delete_id(id) {
            if (confirm('Two step confirmation required to prevent accidental deletion')) {
                if (confirm('Please confirm twice')) {
                    window.location.href = 'lettings_data.php?delete_id=' + id;
                }
            }
        }
    </script>
<html>
    <head>
        <title>Specialisto Puslapis</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/fontawesome/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/DTstyle.css" />
    </head>
    <body class="bg-info" style="width:100%">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
        <div>
            <div class="table-responsive" style="width:80%; margin-left:auto; margin-right:auto">
                <div class="table table-bordered table-striped table-hover">
                    <h2 class="text-center text-dark pt-2">Specialisto Puslapis</h2>
                    <hr>
                    <table class="table table-bordered table-hover" style="width:100%" id="example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                                <th>Kontaktinis Numeris</th>
                                <th>Užduotis</th>
                                <th>Apytikrė trukmė</th>
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
                                        <?php echo $row['Pavarde'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['Telefonas'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['specialistas'] ?>
                                    </td>
                                    <td style="font-size: 14px; white-space: nowrap;">
                                        <?php echo $row['trukme'] ?>
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