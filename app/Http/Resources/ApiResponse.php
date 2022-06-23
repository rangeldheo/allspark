<?php

namespace App\Http\Resources;

use Illuminate\Support\Facades\Response;

class ApiResponse
{
    /**
     * Retorno pradronizado da API
     *
     * @param array $data
     * @param string|null $message
     * @param array $error
     * @param int $statusCode
     *
     * @return [json]
     */
    public static function return(
        $data = [],
        $message = null,
        $error = [],
        $statusCode = 200
    ) {
        return Response::json([
            'data'            => $data,
            'message'         => $message,
            'error'           => $error
        ], $statusCode);
    }
}
