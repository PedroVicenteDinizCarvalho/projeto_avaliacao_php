<?php $title = 'Lista de Empresas'; ?>
<h1>Empresas</h1>
<a href="/empresa/criar" class="btn">Adicionar Nova Empresa</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($empresas as $empresa): ?>
            <tr>
                <td><?= $empresa['id_empresa'] ?></td>
                <td><?= htmlspecialchars($empresa['nome']) ?></td>
                <td>
                    <a href="/empresa/editar/<?= $empresa['id_empresa'] ?>">Editar</a>
                    <a href="/empresa/excluir/<?= $empresa['id_empresa'] ?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
