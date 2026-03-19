<?php
if (isset($_GET['q'])) {
    echo "<h2>You entered: " . $_GET['q'] . "</h2>";
}
?>

<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>
