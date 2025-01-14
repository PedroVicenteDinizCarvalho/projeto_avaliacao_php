<?php $title = 'Login'; ?>
<form method="POST" action="/usuario/autenticar">
    <h1>Login</h1>
    <label for="login">E-mail:</label>
    <input type="email" id="login" name="login" required>
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
    
    <button type="submit">Entrar</button>
    
    <?php if (!empty($error)): ?>
        <p class="error"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
</form>
