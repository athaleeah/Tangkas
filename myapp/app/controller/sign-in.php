<?php
class SignInController extends Controller {
    public function __construct() {
    }

    public function index() {
        $data['title'] = "Sign in";
        $this->display('js/sign-in', $data);
    }

    public function authenticate() {
		
        try {
            if (isset($_POST['username'], $_POST['password'], $_POST['role'])) {
                $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
                $role = filter_var($_POST['role'], FILTER_SANITIZE_STRING);

                require_once 'models/UserModel.php';
                $userModel = new UserModel();
                $user = $userModel->checkCredentials($username, $password, $role);
				var_dump($user);
                if ($user) {
                    session_start();
                    session_regenerate_id();
                    $_SESSION['user'] = $user;
                    $_SESSION['role'] = $role;
				
                    switch ($role) {
                        case 'admin':
                            header("Location: /home/dashboard");
                            break;
                        case 'pihak terkait':
                            header("Location: /home/dashboard");
                            break;
                        case 'masyarakat':
                            header("Location: /home/dashboard");
                            break;
                    }
                    exit();
                } else {
                    header("Location: /login?login=failed");
                    exit();
                }
            } else {
                header("Location: /login?login=invalid");
                exit();
            }
        } catch (Exception $e) {
            header("Location: /login?error=unexpected_error");
            exit();
        }
    }
}
