<?php

namespace App\Traits;

use App\Services\ModelSearch;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Foundation\Http\FormRequest;

trait SearchModelScope
{
    /**
     * Escopo que aceita qualquer consulta por campo
     * do modelo que for recuperado no $request->only()
     * @param Builder $query
     * @param FormRequest $request
     * @return Paginator
     */
    public function scopeSearch(Builder $query, FormRequest $request = null): Paginator
    {
        //configura a quantidade de resultados por página
        $config = $request->only(ModelSearch::RESULTS);
        $this->setPerPage($config[ModelSearch::RESULTS] ?? ModelSearch::RESULTS_DEFAULT_VALUE);

        return ModelSearch::search(
            $request,
            $query,
            $this->allowedFieldsForEqual,
            $this->allowedFieldsForLike
        );
    }
}
