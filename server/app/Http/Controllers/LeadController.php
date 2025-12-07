<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class LeadController extends Controller
{
    /**
     * Store a new lead submission.
     */
    public function store(StoreLeadRequest $request): JsonResponse
    {
        try {
            $lead = Lead::create($request->validated());

            return response()->json([
                'status' => 'success',
                'message' => 'Lead saved successfully.',
                'lead_id' => $lead->id,
            ]);
        } catch (\Throwable $e) {
            Log::error('Failed to store lead', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
            ]);

            return response()->json([
                'status' => 'error',
                'message' => 'Unable to process your request right now.',
            ], 500);
        }
    }
}
