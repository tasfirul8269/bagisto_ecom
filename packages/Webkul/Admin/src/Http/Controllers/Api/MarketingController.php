<?php

namespace Webkul\Admin\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Webkul\Admin\Http\Controllers\Controller;

// REMOVED: CartRule and CatalogRule packages not installed
// use Webkul\CartRule\Repositories\CartRuleRepository;
// use Webkul\CatalogRule\Repositories\CatalogRuleRepository;

class MarketingController extends Controller
{
    // REMOVED: Constructor dependencies on missing packages
    // public function __construct(
    //     protected CartRuleRepository $cartRuleRepository,
    //     protected CatalogRuleRepository $catalogRuleRepository
    // ) {}

    public function cartRules(Request $request): JsonResponse
    {
        // CartRule package not available, return empty data
        return response()->json([
            'data' => [
                'data' => [],
                'current_page' => 1,
                'last_page' => 1,
                'per_page' => $request->get('limit', 10),
                'total' => 0,
            ],
        ]);
    }

    public function catalogRules(Request $request): JsonResponse
    {
        // CatalogRule package not available, return empty data
        return response()->json([
            'data' => [
                'data' => [],
                'current_page' => 1,
                'last_page' => 1,
                'per_page' => $request->get('limit', 10),
                'total' => 0,
            ],
        ]);
    }
}
