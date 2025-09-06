<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($title) ?></title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, sans-serif; background: #f9f9f9; color: #333; margin: 0; padding: 20px; }
        .container { max-width: 1200px; margin: 20px auto; padding: 20px; background: #fff; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { font-size: 24px; color: #d9534f; border-bottom: 2px solid #eee; padding-bottom: 10px; margin-top: 0; }
        .error-details { margin-top: 20px; }
        .error-details p { font-size: 16px; margin: 10px 0; padding: 10px; background: #f2dede; border: 1px solid #ebccd1; border-radius: 4px; }
        .error-details strong { color: #a94442; }
        pre { background: #2d2d2d; color: #f1f1f1; padding: 15px; border-radius: 4px; white-space: pre-wrap; word-wrap: break-word; font-family: "Courier New", Courier, monospace; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ocorreu um Erro na Aplicação</h1>
        <div class="error-details">
            <p><strong>Tipo:</strong> <?= get_class($exception) ?></p>
            <p><strong>Mensagem:</strong> <?= htmlspecialchars($exception->getMessage()) ?></p>
            <p><strong>Arquivo:</strong> <?= htmlspecialchars($exception->getFile()) ?></p>
            <p><strong>Linha:</strong> <?= $exception->getLine() ?></p>
        </div>
        <h2>Stack Trace</h2>
        <pre><?= htmlspecialchars($exception->getTraceAsString()) ?></pre>
    </div>
</body>
</html>