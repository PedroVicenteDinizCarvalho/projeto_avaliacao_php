<?php $title = 'Cadastrar Funcionário'; ?>
<form method="POST" action="/funcionario/criar">
    <h1>Cadastrar Novo Funcionário</h1>
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" required>
    
    <label for="rg">RG:</label>
    <input type="text" id="rg" name="rg">
    
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="id_empresa">Empresa:</label>
    <select id="id_empresa" name="id_empresa" required>
        <?php foreach ($empresas as $empresa): ?>
            <option value="<?= $empresa['id_empresa'] ?>"><?= htmlspecialchars($empresa['nome']) ?></option>
        <?php endforeach; ?>
    </select>
    
    <button type="submit">Salvar</button>
</form>
