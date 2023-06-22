<?php

namespace App\Providers;

use Illuminate\Auth\Events\Verified;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LogVerifiedUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function verify(Request $request, $id)
    {
        $user = User::findOrFail($id);

        if($user->markEmailAsVerified())
        {
            Auth::login($user);
            event(new Verified($user));
            return redirect()->withAlert('Ton compte a été vérified');
        }

    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Verified  $event
     * @return void
     */
    public function handle(Verified $event)
    {
        $user = $event->user;
        $userId = $user->id;
    }
}
