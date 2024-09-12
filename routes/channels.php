<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;

Broadcast::channel('users.{id}', function (User $user, $id) {
    return (int) $user->id === (int) $id;
});

//Broadcast for specific room
/*Broadcast::channel('chat.room.{roomId}', function (User $user, $roomId) {
    if ($user->canAccessRoom($roomId)){
        return false;
    }
    return true;
});*/
