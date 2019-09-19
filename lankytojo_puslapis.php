<?php require 'dbconfig.php';
if (!$conn){
die("Connection failed: ". mysqli_connect_error());
}
$query = "SELECT * FROM specialistas INNER JOIN lankytojas ON specialistas.id=lankytojas.Specialistas";
$init_result = mysqli_query($conn, $query);
?>
  
<html>
    <head>
    <title>Lettings Applicants</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Database - Add Applicant</title>
    </head>
    <body>
        
        <div class ="container" style="width:900px;" align="center">
            <div class="table-responsive">
                <div class="search-table-outter wrapper">
                    <form action="/NFQAcademy/lankytojas_handler.php" method="get">
                        <table style="margin-top: 200px">
                            <tr>
                                <td >
                                    Įveskite savo numerį: <br/><input name="vartotojas" class="form-control" style="margin-top: 20px" required/>
                                </td>
                            </tr>
                            </table>
                            <tr>
                                <td>
                                    <br>
                                    <button type="submit" >
                                        <strong>
                                            Patikrinti
                                        </strong>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <?php 

        mysqli_close($conn); ?>
    </body>
</html>