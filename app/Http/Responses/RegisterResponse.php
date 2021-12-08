<?php


namespace App\Http\Responses;


use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class RegisterResponse implements \Laravel\Fortify\Contracts\RegisterResponse
{

    /**
     * @inheritDoc
     */
    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.
//
//        if (Auth::user()->role_as == 'admin')
//        {
//            return'dashboard';  //can also return to 'home'
//        }
//        else
//        {
//            return 'mtaa';
//        }


        return $request->wantsJson()
            ? new JsonResponse('',201)
            : redirect(config('fortify.home'));
    }
}
