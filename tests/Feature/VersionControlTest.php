<?php

namespace Tests\Feature;

use App\Alias\HttpAlias;
use App\Alias\SysAlias;
use Illuminate\Support\Facades\Config;
use Tests\TestCase;

class VersionControlTest extends TestCase
{
    /**
     * @test
     */
    public function api_version_is_configured()
    {
        $response = $this->json(HttpAlias::GET, '/api/v1/version');

        $apiVersion = $response->original['data'][SysAlias::API_VERSION_KEY];

        $this->assertEquals(
            $apiVersion,
            Config::get(SysAlias::API_VERSION_VALUE)
        );
        $this->assertIsString($apiVersion);
    }
}
