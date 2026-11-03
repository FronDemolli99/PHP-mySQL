<!DOCTYPE html>
<h1> Popullsia sipas Moshes</h1>
<table>
<tr>
    <th>Mosha</th>
    <th>Gjinia M.</th>
    <th>Gjinia F.</th>
</tr>

</html>

<style>
    table{
        width: 40%;
        border-collapse: collapse;
    }

    th,td{
        padding: 10px;
        text-align: center;
        border: 5px solid;
    }

    th {
        background-color: red;
        font-weight:bold;
    }

    td {
        background-color: yellow;
        font-weight: italic;
    }


    </style>

    <?php
    
    $Popullsia = array(
        array('0-8 vjeq', 2600, 3100),
        array('9-17 vjeq', 2000, 2150),
        array('18-21 vjeq', 3600, 3500),
        array('21-35 vjeq', 4600, 3000),

    );

    for($row=0;$row<4;$row++){
        echo "<tr>";
        for($col=0;$col<3;$col++){
        echo "<td>", $Popullsia[$row][$col] , "</td>";
        }
        echo "</tr>";
    }
    
    echo "<table>";
    
    ?>