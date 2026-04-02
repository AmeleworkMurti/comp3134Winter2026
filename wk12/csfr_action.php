<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $session_token = $_SESSION["confirmation"] ?? "";
    $form_token = $_POST["confirmation"] ?? "";

    if ($session_token !== $form_token) {
        $message = "CSRF attack detected!";
    } else {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "host" && $password === "pass") {
            $message = "Login successful!";
        } else {
            $message = "Login failed!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Secure Login</h2>

<form method="POST">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="hidden" name="confirmation" value="<?php echo $_SESSION['confirmation']; ?>">
    <button type="submit">Login</button>
</form>

<div><?php echo $message; ?></div>

</body>
</html>
