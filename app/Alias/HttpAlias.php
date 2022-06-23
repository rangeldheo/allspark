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
 * HttpAlias::GET
 */
class HttpAlias
{
    /**
     * O método GET solicita a representação de um recurso específico.
     * Requisições utilizando o método GET devem retornar apenas dados.
     */
    const GET = 'GET';

    /**
     * O método PUT substitui todas as atuais representações do
     * recurso de destino pela carga de dados da requisição.
     */
    const PUT = 'PUT';

    /**
     * O método POST é utilizado para submeter uma entidade a um recurso
     * específico, frequentemente causando uma mudança no estado do
     * recurso ou efeitos colaterais no servidor.
     */
    const POST = 'POST';

    /**
     * O método PATCH é utilizado para aplicar modificações
     * parciais em um recurso.
     */
    const PATCH = 'PATCH';

    /**
     * O método DELETE remove um recurso específico.
     */
    const DELETE = 'DELETE';

    /**
     * O método OPTIONS é usado para descrever as opções de
     * comunicação com o recurso de destino.
     */
    const OPTIONS  = 'OPTIONS';
}
