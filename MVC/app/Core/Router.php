<?php

namespace App\Core;

class Router
{
    // Armazena as rotas registradas, separadas por método HTTP
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    /**
     * Registra uma rota GET.
     * @param string $uri    Padrão da URI
     * @param string $action Controller@método
     */
    public function get($uri, $action)
    {
        $this->routes['GET'][$uri] = $action;
    }

    /**
     * Registra uma rota POST.
     * @param string $uri    Padrão da URI
     * @param string $action Controller@método
     */
    public function post($uri, $action)
    {
        $this->routes['POST'][$uri] = $action;
    }

    /**
     * Despacha a requisição para a rota correspondente.
     */
    public function dispatch()
    {
        // 1. Pega a URI e o método da requisição atual
        $uri = $this->getCurrentUri();
        $method = $_SERVER['REQUEST_METHOD'];

        // 2. Itera sobre as rotas registradas para o método atual
        foreach ($this->routes[$method] as $route => $action) {
            // Converte a rota em uma expressão regular para capturar parâmetros
            // Ex: /produtos/ver/{id} -> #^/produtos/ver/([a-zA-Z0-9_]+)$#
            $regex = "#^" . preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([a-zA-Z0-9_]+)', $route) . "$#";
            
            // 3. Verifica se a URI atual corresponde à rota
            if (preg_match($regex, $uri, $matches)) {
                // Remove a primeira correspondência (a URI completa)
                array_shift($matches);
                $params = $matches;
                
                // 4. Se correspondeu, chama a ação do controller
                $this->callAction($action, $params);
                return; // Para a execução após encontrar a rota
            }
        }

        // Se nenhuma rota foi encontrada
        die("Erro 404: Rota não encontrada para o método {$method} e URI {$uri}");
    }

    /**
     * Chama o método do controller apropriado.
     * @param string $action 'Controller@método'
     * @param array  $params Parâmetros da URI
     */
    protected function callAction($action, $params = [])
    {
        // Divide 'Controller@método' em duas partes
        list($controllerName, $method) = explode('@', $action);
        
        $controllerName = 'App\\Controllers\\' . $controllerName;

        if (!class_exists($controllerName)) {
            die("Controller {$controllerName} não encontrado.");
        }
        
        $controllerInstance = new $controllerName();

        if (!method_exists($controllerInstance, $method)) {
            die("Método {$method} não encontrado no controller {$controllerName}.");
        }

        // Chama o método, passando os parâmetros capturados da URI
        call_user_func_array([$controllerInstance, $method], $params);
    }
    
    /**
     * Obtém a URI atual da requisição, já tratada para subpastas.
     * @return string
     */
    protected function getCurrentUri()
    {
        // Pega a URI completa da requisição (ex: /ProgramadorWebSenac/MVC/public/produtos)
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        // Remove o caminho da subpasta (BASE_PATH) do início da URI, se existir.
        // Isso garante que o roteador trabalhe apenas com a rota lógica (ex: /produtos)
        if (defined('BASE_PATH') && strpos($uri, BASE_PATH) === 0) {
            $uri = substr($uri, strlen(BASE_PATH));
        }
        
        // Garante que a URI comece com uma barra. Se estiver vazia (página inicial), retorna '/'
        return empty($uri) ? '/' : $uri;
    }
}