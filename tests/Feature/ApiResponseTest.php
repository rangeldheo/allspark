<?php

namespace Tests\Feature;

use App\Http\Resources\ApiResponse;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ApiResponseTest extends TestCase
{
    /**
     * Testa a estrutura de retorno Json
     *  @test
     */
    public function structure_is_respected()
    {

        $compare = ApiResponse::return(
            ['A', 'B'],
            'messagem',
            ['erro1', 'erro2'],
            200
        );

        $this->assertArrayHasKey('data', $compare->original);
        $this->assertArrayHasKey('message', $compare->original);
        $this->assertArrayHasKey('error', $compare->original);

        $this->assertIsArray($compare->original['data']);
        $this->assertIsString($compare->original['message']);
        $this->assertIsArray($compare->original['error']);
    }
}
