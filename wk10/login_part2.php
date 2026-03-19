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

$username = "AmeleworkTheBuilder"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $user = $_POST["username"];

    if (in_array($password, $common_passwords)) {
        echo "<h2>Welcome $user to Your Portal</h2>";
        exit;
    }
}
?>

<h1>Weak Password</h1>
<form method="post">
    <input type="hidden" name="username" value="<?php echo $username; ?>">
    
    <label>Password</label>
    <input type="password" name="password">
    <br/>
    <input type="submit"> 
</form>
