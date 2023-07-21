<?php

namespace App\Http\Services;

use App\Http\Repositories\EventRepository;
use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class EventService
{
    private ?int $organizationId;

    public function __construct(public EventRepository $eventRepository)
    {
        $this->organizationId = auth('sanctum')->user()?->id;
    }

    public function getOrganizationEvents(?int $organizationId = null): Collection|array
    {
        return $this->eventRepository->getOrganizationEvents($organizationId ?? $this->organizationId);
    }

    public function update(array $updatedEvent, ?int $organizationId = null): bool
    {
        return $this->eventRepository->update($updatedEvent, $organizationId ?? $this->organizationId);
    }

    public function getEvent(int $eventId, ?int $organizationId = null): Model|Collection|Event|Builder|array|null
    {
        return $this->eventRepository->getEvent($eventId, $organizationId ?? $this->organizationId);
    }

    public function destroy(int $id, ?int $organizationId = null)
    {
        return $this->eventRepository->destroy($id, $organizationId ?? $this->organizationId);
    }
}
