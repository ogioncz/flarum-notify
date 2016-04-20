<?php

use Illuminate\Contracts\Events\Dispatcher;
use Moay\Notify\ApiRoutes;
use Moay\Notify\Listeners\AddClientAssets;
use Moay\Notify\Listeners\DiscussionWasDeletedListener;
use Moay\Notify\Listeners\DiscussionWasStartedListener;
use Moay\Notify\Listeners\PostWasDeletedListener;
use Moay\Notify\Listeners\PostWasHiddenListener;
use Moay\Notify\Listeners\PostWasPostedListener;

return function (Dispatcher $events) {
    $events->subscribe(AddClientAssets::class);
    $events->subscribe(DiscussionWasDeletedListener::class);
    $events->subscribe(DiscussionWasStartedListener::class);

    $events->subscribe(PostWasDeletedListener::class);
    $events->subscribe(PostWasHiddenListener::class);
    $events->subscribe(PostWasPostedListener::class);

    // Add API routes
    $events->subscribe(ApiRoutes::class);
};
