<?php

namespace App\Listeners; 

use App\Event\PostCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
class SendEmailToUser
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PostCreated $event): void
    {
   Log::alert("Foydalanuvchiga email jonatildi. Sarlawha:" . $event->post->title);
    }
}
