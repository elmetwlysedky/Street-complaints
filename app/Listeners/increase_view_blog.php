<?php

namespace App\Listeners;

use App\Events\View_blog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class increase_view_blog
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(View_blog $event)
    {
        $this->update($event->Blog);
    }
    function update($Blog){
        $Blog ->view = $Blog ->view + 1;
        $Blog->save();
    }
}
