session_start();
$_SESSION["login"] = true;
if(!isset($_SESSION["login"]) ) {
    header("location: login.php");
    exit;
}