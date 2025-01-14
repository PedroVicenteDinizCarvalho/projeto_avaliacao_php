<?php $title = 'Lista de Funcionários'; ?>
<h1>Funcionários</h1>
<a href="/funcionario/criar" class="btn">Adicionar Novo Funcionário</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>E-mail</th>
            <th>Empresa</th>
            <th>Salário</th>
            <th>Data de Cadastro</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($funcionarios as $funcionario): ?>
            <tr style="background-color: <?= $funcionario['bonificacao'] >= 20 ? '#f88' : ($funcionario['bonificacao'] >= 10 ? '#88f' : '#fff') ?>;">
                <td><?= $funcionario['id_funcionario'] ?></td>
                <td><?= htmlspecialchars($funcionario['nome']) ?></td>
                <td><?= $funcionario['cpf'] ?></td>
                <td><?= $funcionario['rg'] ?></td>
                <td><?= htmlspecialchars($funcionario['email']) ?></td>
                <td><?= htmlspecialchars($funcionario['empresa']) ?></td>
                <td>R$<?= number_format($funcionario['salario'], 2, ',', '.') ?></td>
                <td><?= date('d/m/Y', strtotime($funcionario['data_cadastro'])) ?></td>
                <td>
                    <a href="/funcionario/editar/<?= $funcionario['id_funcionario'] ?>">Editar</a>
                    <a href="/funcionario/excluir/<?= $funcionario['id_funcionario'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="/funcionario/exportar" class="btn">Exportar para PDF</a>
