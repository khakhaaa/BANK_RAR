<?php
$conn=pg_connect("host=localhost port=5432 dbname=bank user=postgres password=77282930");
/* check connection */
if (!$conn) {
    echo "<h1>Doesn't work</h1>";
}
else {
    echo "<h1>Works</h1>";
}
?>
