<?php
if (isset($_GET['q'])) {
    $safe_input = htmlentities($_GET['q']);
    echo "<h2>You entered: " . $safe_input . "</h2>";
}
?>

<form method="get">
    <input name="q" placeholder="Enter Text">
    <br/>
    <input type="submit" value="Go">
</form>
