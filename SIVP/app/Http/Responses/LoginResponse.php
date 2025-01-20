<?php
namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $role = auth()->user()->role;

        if ($request->wantsJson()) {
            return new JsonResponse('', 204);
        }

        // Redirect berdasarkan role
        if ($role === 'admin') {
            return redirect('/admin/dashboard');
        } elseif ($role === 'masyarakat') {
            return redirect('/masyarakat/dashboard');
        }

        return redirect('/home'); // Redirect default jika role tidak ditemukan
    }
}
