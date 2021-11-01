<?php
include 'public/model/AdminModel/Login.php';
class AdminController
{
    public function LogIn()
    {
        $loi_login_admin = '';
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['Email'];
            $password = $_POST['Password'];

            $objSignIn = new AdminModel();
            $check = $objSignIn->login($email, $password);
            if ($check) {
                $_SESSION['admin'] = [$email, $password];
                $this->redirect('admin.php');
            } else {
                $loi_login_admin = "<span class = 'error'>Password or Email is not true</span>";
            }
        }
        include 'public/view/admin/login.php';
    }

    public function LogOut()
    {
        unset($_SESSION['admin']);
        $this->redirect('index.php');
    }

    public function redirect($url)
    {
?>
        <script>
            let url = '<?= $url; ?>';
            window.location.href = url;
        </script>
<?php
    }
}
