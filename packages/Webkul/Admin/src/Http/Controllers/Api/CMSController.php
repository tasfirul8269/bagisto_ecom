<?php

namespace Webkul\Admin\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Webkul\Admin\Http\Controllers\Controller;

class CMSController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        // CMS package not available, return empty data
        return response()->json([
            'data' => [
                'data' => [],
                'current_page' => 1,
                'last_page' => 1,
                'per_page' => 10,
                'total' => 0,
            ],
        ]);
    }

    public function show(int $id): JsonResponse
    {
        return response()->json([
            'data' => null,
        ]);
    }
}
