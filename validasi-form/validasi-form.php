<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
</head>
<body>
    <h1>FORM VALIDASI</h1>
    <?php 
        if (isset($_GET['name'])) {
            if (isset($_GET['name'] == "empty")) {
                echo "<h4>Name Has Not Been Entered !</h4>";
            }
        }        
    ?>

    <h4>Please Enter Your Name :</h4>
    <form action="./validasi.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name"></td>
                <td><input type="text"></td>
            </tr>
        </table>
    </form>
</body>
</html>