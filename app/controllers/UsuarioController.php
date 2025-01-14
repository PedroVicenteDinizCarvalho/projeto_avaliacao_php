<?php

require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../core/Controller.php';

class UsuarioController extends Controller
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);

            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($senha)) {
                $this->view('usuario/login', ['erro' => 'Email ou senha inválidos.']);
                return;
            }

            $usuario = new Usuario();
            $user = $usuario->autenticar($email, md5($senha));

            if ($user) {
                session_start();
                $_SESSION['usuario_id'] = $user['id'];
                header('Location: /funcionario/listar');
            } else {
                $this->view('usuario/login', ['erro' => 'Credenciais inválidas.']);
            }
        } else {
            $this->view('usuario/login');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
    }
}
