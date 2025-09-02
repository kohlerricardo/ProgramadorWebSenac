<?php

namespace App\Core;

/**
 * SimpleMVC - Controller Base
 * Os outros controllers herdarão desta classe.
 */
abstract class Controller
{
    /**
     * Carrega um Model.
     * @param string $modelName O nome do Model (ex: 'Produto')
     * @return object A instância do Model
     */
    protected function model($modelName)
    {
        $className = 'App\\Models\\' . ucfirst($modelName);
        if (class_exists($className)) {
            return new $className();
        }
        return null;
    }

    /**
     * Renderiza uma View.
     * @param string $viewName O nome da View (ex: 'produtos/index')
     * @param array $data Dados a serem passados para a View
     */
    protected function view($viewName, $data = [])
    {
        $viewFile = ROOT .DIRECTORY_SEPARATOR. VIEW_FOLDER . $viewName . '.php';

        if (file_exists($viewFile)) {
            // Transforma as chaves do array de dados em variáveis
            // Ex: $data['produtos'] se torna a variável $produtos na view
            extract($data);

            // Inicia o buffer de saída para incluir o layout
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean(); // Pega o conteúdo da view

            // Renderiza o layout completo
             // require_once ROOT . '/app/Views/layouts/header.php';
            echo $content;
            // require_once ROOT . '/app/Views/layouts/footer.php';
        } else {
            die("Erro: View '{$viewName}' não encontrada.");
        }
    }

    /**
     * Redireciona o usuário para uma URL.
     * @param string $url A URL de destino (ex: '/produtos')
     */
    protected function redirect($url)
    {
        header('Location: ' . $url);
        exit();
    }
}