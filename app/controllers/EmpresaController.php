<?php

require_once __DIR__ . '/../models/Empresa.php';
require_once __DIR__ . '/../core/Controller.php';

class EmpresaController extends Controller
{
    public function criar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = trim($_POST['nome']);

            if (empty($nome)) {
                $this->view('empresa/criar', ['erro' => 'O nome da empresa é obrigatório.']);
                return;
            }

            $empresa = new Empresa();
            $resultado = $empresa->criar($nome);

            if ($resultado) {
                header('Location: /empresa/listar');
            } else {
                $this->view('empresa/criar', ['erro' => 'Erro ao cadastrar a empresa.']);
            }
        } else {
            $this->view('empresa/criar');
        }
    }

    public function listar()
    {
        $empresa = new Empresa();
        $empresas = $empresa->listar();
        $this->view('empresa/listar', ['empresas' => $empresas]);
    }
}
