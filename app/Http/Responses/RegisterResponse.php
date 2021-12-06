<?php


namespace App\Http\Responses;


use Illuminate\Http\JsonResponse;

class RegisterResponse implements \Laravel\Fortify\Contracts\RegisterResponse
{

    /**
     * @inheritDoc
     */
    public function toResponse($request)
    {
        // TODO: Implement toResponse() method.

        return $request->wantsJson()
            ? new JsonResponse('',201)
            : redirect(config('fortify.home'));
    }
}
