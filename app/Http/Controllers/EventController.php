<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventRequest;
use App\Http\Resources\EventResource;
use App\Http\Services\EventService;
use App\Models\Event;
use Illuminate\Http\JsonResponse;

class EventController extends Controller
{
    public function __construct(public EventService $eventService)
    {
    }

    public function index(): JsonResponse
    {
        if ($events = $this->eventService->getOrganizationEvents()) {
            return response()->json(EventResource::collection($events));
        }

        return response()->json(['message' => 'No content'], 204);
    }

    public function show($eventId): JsonResponse
    {
        if ($event = $this->eventService->getEvent($eventId)) {
            return response()->json(EventResource::make($event));
        }

        return response()->json(['message' => 'Not Found!'], 404);
    }

    public function update(int $eventId, EventRequest $request): JsonResponse
    {
       try {
           if ($this->eventService->update($request->only('title', 'start_date', 'end_date'),$eventId)) {
               return response()->json(['message' => 'success']);
           }

           return response()->json(['message' => 'Not Found!'], 404);
       } catch (\Throwable $exception) {
           return response()->json(['message' => $exception->getMessage()], 500);
       }
    }

    public function destroy(int $id): JsonResponse
    {
        try {
            if ($this->eventService->destroy($id)) {
                return response()->json(['message' => 'success']);
            }

            return response()->json(['message' => 'Not Found!'], 404);
        } catch (\Throwable $exception) {
            return response()->json(['message' => $exception->getMessage()], 500);
        }
    }
}
