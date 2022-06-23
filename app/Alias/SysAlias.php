<?php

namespace App\Alias;

/**
 * O que é:
 * Aliás para os tipo inseguros
 * valores digitaveis pelo desenvolvedor durante a codificação
 *
 * Motivação:
 * Evitar a digitação incorreta dos nomes dos campos
 * e obter autocomplete dos nomes dos campos
 *
 * Como chamar:
 * SysAlias::API_VERSION
 */
class SysAlias
{
    /** versão da api : configurado no arquivo .env*/
    const API_VERSION_KEY = 'api_version';
    const API_VERSION_VALUE = 'custom.api_version';
}
