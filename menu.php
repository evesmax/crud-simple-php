<?PHP 
// start a session 
session_start();
// manipulate session variables 
$_SESSION["db"]="demo";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Seleccionar Base de datos</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>


</head>

   <form action="index.php">
        <div class="page-header clearfix">
            <select  aria-label="" name="cmbdb" id="cmbdb">
                <option value="demo">Demo</option>
                <option value="demo1">Demo1</option>
            </select><BR>
            <button type="submit" class="btn btn-success">Conectar</button>
        </div>
    </Form>
