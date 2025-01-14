<?php $title = 'Cadastrar Empresa'; ?>
<form method="POST" action="/empresa/criar">
    <h1>Cadastrar Nova Empresa</h1>
    <label for="nome">Nome da Empresa:</label>
    <input type="text" id="nome" name="nome" required>
    <button type="submit">Salvar</button>
    
    <?php if (!empty($message)): ?>
        <p class="success"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>
</form>
