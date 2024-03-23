<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('test-channel', function ($user, $id) {
    return 1;
});
