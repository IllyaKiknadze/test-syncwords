<?php

namespace App\Http\Repositories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class EventRepository
{
    public function getOrganizationEvents(int $organizationId)
    {
        return Event::where('organization_id', $organizationId)->get();
    }

    public function update(array $updatedEvent, int $eventId, int $organizationId): bool
    {
        return Event::where('organization_id', $organizationId)
                    ->where('id', $eventId)->update($updatedEvent);
    }

    public function getEvent(int $eventId, int $organizationId): Model|Collection|Event|Builder|array|null
    {
        return Event::where('organization_id', $organizationId)->find($eventId);
    }

    public function destroy(int $id, int $organizationId)
    {
        return Event::where('organization_id', $organizationId)->where('id', $id)->delete();
    }
}
