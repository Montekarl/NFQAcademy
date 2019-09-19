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
                                    Įveskite savo numerį: <br/><input name="id" class="form-control" required/>
                                </td>
                            </tr>
                            </table>
                            <tr>
                                <td>
                                    <br>
                                    <button type="submit" name="btn-save"><strong>Patikrinti</strong></button>
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