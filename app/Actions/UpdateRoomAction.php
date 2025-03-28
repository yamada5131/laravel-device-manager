<?php

namespace App\Actions;

use App\Models\Room;

final class UpdateRoomAction
{
    public function handle(Room $room, array $data): void
    {
        $room->update($data);
    }
}
