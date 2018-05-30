<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Multiplication Table</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

    table {
        border: 1px solid black;
        border-spacing: 0;
    }
    
    td {
        padding: 0.5rem;
        text-align: center;
        border-left: 1px solid black;
        border-bottom: 1px solid black;
    }

    tr:first-child, td:first-child {
        font-size: 1.5rem;
        font-weight: bold;
        border-left: none;
    }

    tr:last-child td {
        border-bottom: none;
    }

    tr:nth-child(even) {
        background-color: #ccc;
    }
    
    </style>
</head>
<body>

<table>
    <tbody>
    <?php

for($i = 0; $i < 13; $i++) {
    echo "<tr>";
    for($j = 0; $j < 13; $j++) {
        echo "<td>";
        if ($i == 0 && $j == 0) {
            echo $j;
        } else if($j == 0 && $i != 0) {
            echo $i;
        } else if($j != 0 && $i == 0) {
            echo $j;
        } else {
            echo ($i * $j);
        }
        echo "</td>";
    }
    echo "</tr>";
}


?>
    </tbody>
</table>
    
</body>
</html>

