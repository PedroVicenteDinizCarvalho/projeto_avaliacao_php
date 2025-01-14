<?php

require_once __DIR__ . '/../models/Funcionario.php';
require_once __DIR__ . '/../models/Empresa.php';
require_once __DIR__ . '/../core/Controller.php';

class FuncionarioController extends Controller
{
    public function criar()
    {
        $empresa = new Empresa();
        $empresas = $empresa->listar();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome']);
            $cpf = trim($_POST['cpf']);
            $rg = trim($_POST['rg']);
            $email = trim($_POST['email']);
            $empresa_id = $_POST['empresa_id'];
            $salario = floatval($_POST['salario']);
            $data_admissao = $_POST['data_admissao'];

            if (empty($nome) || empty($cpf) || empty($email) || empty($empresa_id)) {
                $this->view('funcionario/criar', [
                    'erro' => 'Todos os campos obrigatórios devem ser preenchidos.',
                    'empresas' => $empresas
                ]);
                return;
            }

            $funcionario = new Funcionario();
            $resultado = $funcionario->criar($nome, $cpf, $rg, $email, $salario, $data_admissao, $empresa_id);

            if ($resultado) {
                header('Location: /funcionario/listar');
            } else {
                $this->view('funcionario/criar', [
                    'erro' => 'Erro ao cadastrar o funcionário.',
                    'empresas' => $empresas
                ]);
            }
        } else {
            $this->view('funcionario/criar', ['empresas' => $empresas]);
        }
    }

    public function listar()
    {
        $funcionario = new Funcionario();
        $funcionarios = $funcionario->listar();

        $this->view('funcionario/listar', ['funcionarios' => $funcionarios]);
    }

    public function excluir($id)
    {
        $funcionario = new Funcionario();
        $resultado = $funcionario->excluir($id);

        if ($resultado) {
            header('Location: /funcionario/listar');
        } else {
            echo "Erro ao excluir o funcionário.";
        }
    }
}
