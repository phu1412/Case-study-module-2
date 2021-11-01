<?php
include 'public/model/User.php';
class UserController
{
    public function SignUp()
    {
        $loi_c_pass = $loi_pass =  $loi_email =  $loi_phone = $loi_first_name = $loi_last_name = $loi_answer = $loi_exist = '';
        $first_name = $last_name = $pass = $c_pass = $email = $phone = $answer =  '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $pass = $_POST["pass"];
            $c_pass = $_POST["c_pass"];
            $gender = $_POST["gender"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $answer = $_POST["answer"];

            $regex_pass = '/^[A-Z]{1,1}[a-z0-9]{7,}$/';
            $regex_first_name = '/^([A-Z]{1,1})([a-z\s]{0,})$/';
            $regex_last_name = '/^[A-Z]{1,1}[a-z\s]{0,}$/';
            $regex_email = '/^[_A-Za-z0-9]{1,}\@[A-Za-z0-9]{1,}\.[a-z]{1,}$/';
            $regex_phone = '/^[09|07|08|03|]{2,2}[0-9]{8,8}$/';

            $can_do = true;

            if ($first_name == '') {
                $loi_first_name = "Please enter your first name";
                $can_do = false;
            } else if ($first_name && !preg_match($regex_first_name, $first_name)) {
                $loi_first_name = "Not true";
                $can_do = false;
            }

            if ($last_name == '') {
                $loi_last_name = "Please enter your last name";
                $can_do = false;
            } else if ($last_name && !preg_match($regex_last_name, $last_name)) {
                $loi_last_name = "Not true";
                $can_do = false;
            }

            if ($pass == '') {
                $loi_pass = "Please enter your password";
                $can_do = false;
            } else  if ($pass && !preg_match($regex_pass, $pass)) {
                $loi_pass = "Pass is not comfortable";
                $can_do = false;
            }

            if ($c_pass == '') {
                $loi_c_pass = "Please enter your confirm password";
                $can_do = false;
            } else if ($pass != $c_pass) {
                $loi_c_pass = "Confirm Password not true";
                $can_do = false;
            }

            if ($email == '') {
                $loi_email = "Please enter your email";
                $can_do = false;
            } else   if ($email && !preg_match($regex_email, $email)) {
                $loi_email = "Not true";
                $can_do = false;
            }

            if ($phone == '') {
                $loi_phone = "Please enter your phone";
                $can_do = false;
            } else if ($phone && !preg_match($regex_phone, $phone)) {
                $loi_phone = "Not true";
                $can_do = false;
            }

            if ($can_do) {
                $objModel = new UserModel();
                $check = $objModel->CheckSignUp($email, $phone);
                if (!$check) {
                    $objModel->Create($first_name, $last_name, $pass, $gender, $email, $phone, $answer);
                    $this->redirect('index.php?controller=user&action=signin');
                }
                if ($check) {
                    $loi_exist = 'Email or Phone is Exist';
                }
            }
        }

        include 'public/view/user-login-signup/sign-up.php';
    }

    public function SignIn()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['Email'];
            $password = $_POST['Password'];

            $objSignIn = new UserModel();
            $check = $objSignIn->signIn($email, $password);
            if ($check) {
                $_SESSION['user'] = $check;
                $this->redirect('index.php');
            } else {
?>
                <script>
                    alert('Email or Password is not true');
                </script>
        <?php
            }
        }
        include 'public/view/user-login-signup/sign-in.php';
    }

    public function Setting()
    {
        $loi_c_pass = $loi_pass =  $loi_email =  $loi_phone = $loi_first_name = $loi_last_name = $loi_exist = '';

        $user = $_SESSION['user'];
        $id = $user->id;
        $objSetting = new UserModel();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loi_c_pass = $loi_pass =  $loi_email =  $loi_phone = $loi_first_name = $loi_last_name = $loi_exist = '';

            $first_name = $_POST["first_name"];
            $last_name = $_POST["last_name"];
            $password = $_POST["password"];
            $c_password = $_POST["c_password"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];


            $regex_pass = '/^[A-Z]{1,1}[a-z0-9]{7,}$/';
            $regex_first_name = '/^([A-Z]{1,1})([a-z\s]{0,})$/';
            $regex_last_name = '/^[A-Z]{1,1}[a-z\s]{0,}$/';
            $regex_email = '/^[_A-Za-z0-9]{1,}\@[A-Za-z0-9]{1,}\.[a-z]{1,}$/';
            $regex_phone = '/^[09|07|08|03|]{2,2}[0-9]{8,8}$/';

            $can_do = true;

            if ($first_name == '') {
                $loi_first_name = "Please enter your first name";
                $can_do = false;
            } else if ($first_name && !preg_match($regex_first_name, $first_name)) {
                $loi_first_name = "Not true";
                $can_do = false;
            }

            if ($last_name == '') {
                $loi_last_name = "Please enter your last name";
                $can_do = false;
            } else if ($last_name && !preg_match($regex_last_name, $last_name)) {
                $loi_last_name = "Not true";
                $can_do = false;
            }

            if ($password == '') {
                $loi_pass = "Please enter your password";
                $can_do = false;
            } else  if ($password && !preg_match($regex_pass, $password)) {
                $loi_pass = "Pass is not comfortable";
                $can_do = false;
            }

            if ($c_password == '') {
                $loi_c_pass = "Please enter your confirm password";
                $can_do = false;
            } else if ($password != $c_password) {
                $loi_c_pass = "Confirm Password not true";
                $can_do = false;
            }

            if ($email == '') {
                $loi_email = "Please enter your email";
                $can_do = false;
            } else   if ($email && !preg_match($regex_email, $email)) {
                $loi_email = "Not true";
                $can_do = false;
            }

            if ($phone == '') {
                $loi_phone = "Please enter your phone";
                $can_do = false;
            } else if ($phone && !preg_match($regex_phone, $phone)) {
                $loi_phone = "Not true";
                $can_do = false;
            }

            if ($can_do) {
                $objSetting->setting($first_name, $last_name, $password, $email, $phone, $id);
                $obj = $objSetting->getOne($id);
                $_SESSION['user'] = $obj;
                $this->redirect('index.php');
            }
        }
        include 'public/view/user-login-signup/setting.php';
    }
    public function logOut()
    {
        unset($_SESSION['user']);
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
