<?php if ($produto): ?>
    <h2>Detalhes do Produto</h2>
    <p><strong>Nome:</strong> <?= $produto->nome ?></p>
    <p><strong>Preço:</strong> R$ <?= number_format($produto->preco, 2, ',', '.') ?></p>
    <a href="?listar=1">← Voltar</a>
<?php else: ?>
    <p>Produto não encontrado.</p>
    <a href="?listar=1">← Voltar</a>
<?php endif; ?>
