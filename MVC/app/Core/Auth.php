<?php

namespace App\Core;

class Auth
{
    /**
     * Verifica se o usuário está autenticado.
     * @return bool
     */
    public static function check()
    {
        return isset($_SESSION['user']);
    }
    /**
     * Retorna o nome do usuário autenticado.
     * @return string|null
     */
    public static function user()
    {
        return $_SESSION['user'] ?? null;
    }

    /**
     * Realiza o login do usuário, armazenando seus dados na sessão.
     * @param object|array $user
     */
    public static function login($user)
    {
        // Regenera o ID da sessão para prevenir ataques de Session Fixation
        session_regenerate_id(true);
        $_SESSION['user'] = isset($user) ? $user : null;
        return isset($_SESSION['user']) ? true : false;
    }

    /**
     * Realiza o logout do usuário.
     */
    public static function logout()
    {
        session_unset();
        session_destroy();
    }
   
}