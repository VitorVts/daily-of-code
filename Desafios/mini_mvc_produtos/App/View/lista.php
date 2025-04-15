<h2>Lista de Produtos</h2>
<ul>

<?php foreach ($produtos as $p): ?>
    <li>

        <?= $p->nome ?> - R$ <?= number_format($p->preco, 2, ',', '.') ?>
        <a href="?detalhe=<?= $p->id ?>">[ver detalhes]</a>
    </li>
<?php endforeach; ?>
</ul>