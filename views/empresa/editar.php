<?php $title = 'Editar Empresa'; ?>
<form method="POST" action="/empresa/editar">
    <h1>Editar Empresa</h1>
    <input type="hidden" name="id_empresa" value="<?= $empresa['id_empresa'] ?>">
    
    <label for="nome">Nome da Empresa:</label>
    <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($empresa['nome']) ?>" required>
    <button type="submit">Salvar Alterações</button>
</form>
