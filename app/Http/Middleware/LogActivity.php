<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogActivity
{
    public function handle(Request $request, Closure $next, $aktivitas)
    {
        $response = $next($request);

        if (Auth::check()) {
            $user = Auth::user();

            Log::create([
                'user_id' => $user->id,
                'aktivitas' => $aktivitas,
                'deskripsi' => sprintf("User dengan ID %d melakukan aksi %s pada %s", $user->id, $aktivitas, $request->path())
            ]);
        }

        return $response;
    }
}
