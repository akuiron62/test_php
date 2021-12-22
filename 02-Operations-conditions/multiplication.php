

<html>

<head>
<title>Multiplication table in PHP</title>
    <style type="text/css">
    body {
        font-size:12px;
    }
    
    td {
        height: 24px;
        text-align: center;
        width: 24px;
    }
    
    td.gray {
        background-color: darkgray;
    }
    
    td.white {
        background-color: #fff;
    }

    td.grey {
        background-color: lightgray;
    }
    
    td a {
        display: block;
        text-decoration: none;
        color: black;
    }
    
    td a:hover {
        background-color: #faa;
    }
    </style>
</head>

<body>
    <h1>Multiplication table</h1>

    <table border="1">
    
    <?php 

    echo "<tr style='font-weight: bold;'>";
        echo "<td >🎅</td> \n";
        for ($col=0; $col <= 10; $col++) {
            echo "<td>$col</td> \n";
        }
    echo "</tr>";

    for ($table = 0; $table < 11; $table++)
    {
    echo "<td style='font-weight: bold;'>$table</td>";
        for ($multiple=0; $multiple<11; $multiple++)
        {
            if ($multiple==$table) {
                $bg="gray";
            } elseif (($table % 2 === 0 && $multiple % 2 === 0) || ($table % 2 === 1 && $multiple % 2 === 1)){
                $bg = "grey";
            } else {
                $bg = "white";
            }
        echo "<td class='$bg'><a href='#' title='$table x $multiple = ". $table * $multiple . " ' >" . $table*$multiple . "</a></td>" ;
        }		
    echo  "</tr>";
    }        
    ?>
    </table>

</body>

</html>