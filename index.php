<?php session_start(); ?>
<?php include 'Database.php'; ?>
<?php include_once 'layout/header.php'; ?>

<?php
$controller = '';
if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
if ($controller == 'user') {
    include_once "public/controller/UserController.php";
    $objUser = new UserController();
    if ($action == 'signup') {
        $objUser->SignUp();
    }
    if ($action == 'signin') {
        $objUser->SignIn();
    }
    if ($action == 'setting') {
        $objUser->Setting();
    }
    if ($action == 'logout') {
        $objUser->LogOut();
    }
} else if ($controller == 'admin') {
    include_once 'public/controller/AdminController/LoginController.php';
    $objAdmin = new AdminController();
    if ($action == 'login') {
        $objAdmin->LogIn();
    }
    if ($action == 'logout') {
        $objAdmin->LogOut();
    }
} else {
?>
    <div class='index'>
        <h1>Welcom To HP Class</h1>
        <p>Please register as a member to start participating in our courses</p>
        <img src='img/index.jpg'>
    </div>



<?php
}
?>

<?php include 'layout/footer.php'; ?>