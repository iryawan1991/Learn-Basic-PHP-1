<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <table border="1" cellpading="10" cellspcing="0">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
            
        </tr>
        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
            
        </tr>


    </table>

    <h5>JARAK</h5>
    <table border="1" cellpading="10" cellspcing="0">
        

        <?php
            for ($i=1; $i<=3; $i++){
                echo"<tr>";
                for($j=1; $j<=5; $j++){
                    echo"<td>$i,$j</td>";
                }

                echo"</tr>";
            }
        ?>

    </table>

    <table border="1" cellpading="10" cellspcing="0">
        
        ?>

    </table>
</body>
</html>