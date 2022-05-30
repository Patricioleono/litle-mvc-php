<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>Cerveza</title>
</head>
<body>
    
    <table>
        <tr>
            <th>Nombre Cerveza</th>
            <th>Grados de Alcohol</th>
            <th>Tipo de Cerveza</th>
        </tr>
        
        <?php
            foreach ($datos as $dato){
                echo "<tr><th>".$dato['namebeer']."</th>"."<th>".$dato['gradebeer']."</th>"."<th>".$dato['typebeer']."</th></tr>";
            }
        ?>
        
    </table>
</body>
</html>