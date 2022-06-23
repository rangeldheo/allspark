<?php

namespace App\Http\Controllers;

use App\Alias\SysAlias;
use App\Http\Resources\ApiResponse;
use Illuminate\Support\Facades\Config;

class VersionController extends Controller
{
    public function index()
    {
        return ApiResponse::return([
            SysAlias::API_VERSION_KEY => Config::get(SysAlias::API_VERSION_VALUE)
        ]);
    }
}
