<?php

require "src/conexao-bd.php";
require "src/Modelo/Produto.php";
require "src/Repositorio/ProdutoRepositorio.php";

$produtoRepositorio = new ProdutoRepositorio($pdo);
$produtos = $produtoRepositorio->buscarTodos
?>

  <table>
      <thead>
        <tr>
          <th>Produto</th>
          <th>Tipo</th>
          <th>Descricão</th>
          <th>Valor</th>
          <th colspan="2">Ação</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($produtos as $produto): ?>
          <tr>
            <td><?= $produto->getNome() ?></td>
            <td><?= $produto->getTipo() ?></td>
            <td><?= $produto->getDescricao() ?></td>
            <td><?= $produto->getPrecoFormatado() ?></td>
            <td><a class="botao-editar" href="editar-produto.php?id=<?=$produto->getId()?>">Editar</a></td>
            <td>
              <form action="excluir-produto.php" method="post">
                  <input type="hidden" name="id" value="<?= $produto->getId()?>">
                <input type="submit" class="botao-excluir" value="Excluir">
              </form>
            </td>
          </tr>
      <?php endforeach;?>
      </tbody>
    </table>