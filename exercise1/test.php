<?php
echo "<table border =\"1\" style='border-collapse: collapse'>"; //creating the border outline

    //Add the first row
    echo "<tr style='font-weight: bold;'>";
        echo "<td >X</td> \n";
        for ($col=1; $col <= 16; $col++) {
            echo "<td>$col</td> \n";
        }
    echo "</tr>";

    for ($row=1; $row <= 16; $row++) {  // first loop
        echo "<tr> \n";

        //Adding the first column
        echo "<td style='font-weight: bold;'>$row</td>";

        for ($col=1; $col <= 16; $col++) {
            $p = $col * $row; //computing values
            echo "<td>$p</td> \n";
        }

        echo "</tr>";
    }
echo "</table>"; //closing the table
?>