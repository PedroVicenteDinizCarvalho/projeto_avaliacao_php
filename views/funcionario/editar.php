<?php $title = 'Editar Funcionário'; ?>
<form method="POST" action="/funcionario/editar">
    <h1>Editar Funcionário</h1>
    <input type="hidden" name="id_funcionario" value="<?= $funcionario['id_funcionario'] ?>">
    
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($funcionario['nome']) ?>" required>
    
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" value="<?= $funcionario['cpf'] ?>" required>
    
    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg" value="<?= $funcionario['rg'] ?>">
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" value="<?= $funcionario['email'] ?>" required>
    
    <label for="id_empresa">Empresa:</label>
    <select id="id_empresa" name="id_empresa" required>
        <?php foreach ($empresas as $empresa): ?>
            <option value="<?= $empresa['id_empresa'] ?>" <?= $empresa['id_empresa'] == $funcionario['id_empresa'] ? 'selected' : '' ?>>
                <?= htmlspecialchars($empresa['nome']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    
    <button type="submit">Salvar Alterações</button>
</form>
