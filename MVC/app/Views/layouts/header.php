<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light dark">
    <link  rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <title><?= $titulo ?></title>
  </head>
  <body>
    <nav>
      <ul><li><strong>Bodega</strong></li></ul>
      <ul>
        <li>
          <details class="dropdown">
          <summary>Produtos</summary>
          <ul>
            <li><a href="produtos">Listar</a></li>
            <li><a href="produtos/cadastrar">Cadastrar</a></li>
          </ul>
        </details>
      </li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Vendas</a></li>
      </ul>
    </nav>