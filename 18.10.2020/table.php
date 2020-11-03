<?php
$cols = 10;
$rows = 10;
?>
<style>
    table { border: 0; }
    td { padding: 7px; text-align: center; }
</style>
<table>
    <?php
    for ($tr = 1; $tr <= $rows; $tr++)
    {
        echo '<tr>';
        for($td = 1; $td <= $cols; $td++)
        {
            $background = 'grey';
            echo '<td style="background-color:', $background, '">', $tr * $td, '</td>';
        }
        echo "</tr>";
    }
    ?>
</table>
