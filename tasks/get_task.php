<?php
require_once('../boot.php');

$content = "";
//$content = "blabla";

if (isset($_SESSION['login']))
{
    $sel_query = "SELECT * FROM tasks";
    $sel_result = get_mysqli()->query($sel_query);

    $content = $content . "<table border='1' class='table'><tr><th>user_id</th><th>task</th></tr>";
    $count = 0;

    //Output
    while($row = $sel_result->fetch_assoc())
    {
        $html_row = "";
        $html_row = $html_row . '<tr>';
        $html_row = $html_row . '<td>' . $row['user_id'] . '</td><td>' . $row['task'] . '</td>';
        $html_row = $html_row . '</tr>';

        $content = $content . $html_row;
    }
    $content = $content."</table>";
}
echo $content;
?>