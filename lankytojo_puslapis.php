<?php require 'dbconfig.php';
if (!$conn){
die("Connection failed: ". mysqli_connect_error());
}
$query = "SELECT * FROM heroku_6b4d1af85eae168.specialistas INNER JOIN heroku_6b4d1af85eae168.lankytojas ON heroku_6b4d1af85eae168.specialistas.id=lankytojas.Specialistas";
$init_result = mysqli_query($conn, $query);
?>
  
<html>
    <head>
  

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Lankytojo Puslapis</title>
    </head>
    <body>
        
        <div class ="container" style="width:900px;" align="center">
            <div class="table-responsive">
                <div class="search-table-outter wrapper">
                    
                    <form action="/calm-tor-28070.herokuapp.com/lankytojas_handler.php" method="get">
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