<?

include "./connect.php";

$name = $_POST['name'];
$password = $_POST['password'];

$password = md5($password);

$mysqli->query("INSERT INTO `users`(`login`, `password`) VALUE ('$name', '$password')");

$mysqli->close();

header('Location: /login.html');
?>

