<?php
$common_passwords = [
    "123456",
    "password",
    "123456789",
    "12345",
    "12345678",
    "qwerty",
    "1234567",
    "111111",
    "123123",
    "abc123"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];

    if (in_array($password, $common_passwords)) {
        echo "<h2>Successfully authenticated</h2>";
        exit;
    }
}
?>

<h1>Weak Password</h1>
<form method="post">
    <label>Password</label>
    <input type="password" name="password">
    <br/>
    <input type="submit"> 
</form>
