<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-save']))
{
// variables for input data
$Vardas = isset($_POST['Vardas']) ? mysqli_real_escape_string($conn,$_POST['Vardas']):false;
$Pavarde = isset($_POST['Pavarde']) ? mysqli_real_escape_string($conn,$_POST['Pavarde']):false;
$Telefonas = isset($_POST['Telefonas']) ? mysqli_real_escape_string($conn,$_POST['Telefonas']):false;
$Specialistas = isset($_POST['Specialistas']) ? mysqli_real_escape_string($conn,$_POST['Specialistas']):false;
$sql_query = "INSERT INTO lankytojas(id,Vardas,Pavarde,Telefonas,Specialistas,Registruota) VALUES(NULL,'$Vardas','$Pavarde','$Telefonas','$Specialistas',NULL)";
if(mysqli_query($conn,$sql_query))
{
?>
<script type="text/javascript">
window.location.href = 'svieslente.php';
</script>
<?php
}
// sql query execution function
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
                    <form method="post">
                        <table>
                            <tr>
                                <td>
                                    Vardas: <br/><input name="Vardas" class="form-control" required />
                                    Pavardė:<br/><input name="Pavarde" class="form-control" required/>
                                    Kontaktinis Numeris:<br/><input name="Telefonas" class="form-control" required/>
                                    Specialistas:
                                    <select name="Specialistas" id="Specialistas" class="form-control">
                                        <option></option>
                                        <option value="1">Sąskaitos</option>
                                        <option value="2">Kredito/ Debeto Kortelės</option>
                                        <option value="3">Draudimas</option>
                                        <option value="4">Grynųjų pinigų išdavimas</option>
                                        <option value="5">Valiutos keitimas</option>
                                    </select>
                                </td>
                            </tr>
                            </table>
                            <tr>
                                <td>
                                    <br>
                                    <button type="submit" name="btn-save"><strong>Registruotis</strong></button>
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