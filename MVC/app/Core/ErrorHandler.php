<?php

namespace App\Core;

use ErrorException;
use Throwable;

class ErrorHandler
{
    /**
     * Registra os tratadores de erro e exceção.
     * Deve ser chamado no início do script (ex: index.php).
     */
    public static function register()
    {
        // Converte todos os erros do PHP em exceções
        set_error_handler(function ($severity, $message, $file, $line) {
            // Ignora erros que não estão no nível de relatório atual
            if (!(error_reporting() & $severity)) {
                return;
            }
            throw new ErrorException($message, 0, $severity, $file, $line);
        });

        // Trata todas as exceções não capturadas
        set_exception_handler([self::class, 'handleException']);

        // Trata até mesmo os erros fatais (que não podem ser pegos por set_error_handler)
        register_shutdown_function([self::class, 'handleFatalError']);
    }

    /**
     * O principal tratador de exceções.
     * Decide se exibe o erro detalhado ou uma página genérica.
     * @param Throwable $exception O erro ou exceção capturado.
     */
    public static function handleException(Throwable $exception)
    {
        // Garante que o buffer de saída seja limpo
        if (ob_get_level() > 0) {
            ob_end_clean();
        }

        // Define o código de resposta HTTP para Erro Interno do Servidor
        http_response_code(500);

        // Verifica o ambiente da aplicação
        if (($_ENV['APP_ENV'] ?? 'production') === 'development') {
            // Em desenvolvimento, mostra todos os detalhes
            self::showDevelopmentError($exception);
        } else {
            // Em produção, loga o erro e mostra uma página genérica
            self::logError($exception);
            self::showProductionError();
        }
        
        exit();
    }

    /**
     * Captura erros fatais que ocorrem no final da execução do script.
     */
    public static function handleFatalError()
    {
        $error = error_get_last();

        if ($error !== null && in_array($error['type'], [E_ERROR, E_CORE_ERROR, E_COMPILE_ERROR, E_USER_ERROR])) {
            $exception = new ErrorException($error['message'], 0, $error['type'], $error['file'], $error['line']);
            self::handleException($exception);
        }
    }

    private static function logError(Throwable $exception)
    {
        // Monta a mensagem de log
        $logMessage = sprintf(
            "[%s] %s in %s:%d\nStack trace:\n%s\n",
            date('Y-m-d H:i:s'),
            $exception->getMessage(),
            $exception->getFile(),
            $exception->getLine(),
            $exception->getTraceAsString()
        );

        // Escreve no log de erros do servidor
        error_log($logMessage);
    }

    private static function showDevelopmentError(Throwable $exception)
    {
        $title = 'Erro na Aplicação';
        // Passa a exceção para a view de debug
        require_once ROOT . '/app/Views/errors/debug.php';
    }

    private static function showProductionError()
    {
        $title = 'Erro';
        require_once ROOT . '/app/Views/errors/500.php';
    }
}