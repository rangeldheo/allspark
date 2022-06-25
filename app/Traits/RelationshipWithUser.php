<?php

namespace App\Traits;

use App\Models\User;

/**
 * Relacionamento com usuario
 * Origem tabela: Users
 */
trait RelationshipWithUser
{
    /**
     * Retorna os dados de usuário vinculado a model que usa essa trait
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
