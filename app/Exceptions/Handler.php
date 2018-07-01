<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     if ($request->expectsJson()) {
    //         return response()->json(['error' => 'Unauthenticated.'], 401);
    //     }
    //
    //     return redirect()->guest(route('masuk'));
    // }

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        // if ($this->isHttpException($exception)){
        //     switch ($exception->getStatusCode()) {
        //         case 400:
        //             // code...
        //             return response()->view('error.400');
        //             break;
        //         case 401:
        //             // code...
        //             return response()->view('error.401');
        //             break;
        //         case 403:
        //             // code...
        //             return response()->view('error.403');
        //             break;
        //         case 404:
        //             // code...
        //             return response()->view('error.404');
        //             break;
        //         case 405:
        //             // code...
        //             return response()->view('error.405');
        //             break;
        //         case 408:
        //             // code...
        //             return response()->view('error.408');
        //             break;
        //         case 500:
        //             return response()->view('error.500');
        //             break;
        //         default:
        //             // code...
        //             return response()->json([
        //                 'error' => $exception->getStatusCode()
        //             ]);
        //             break;
        //     }
        // }
        // return response()->json(
        //    [
        //        'errors' => [
        //            'status' => 401,
        //            'message' => 'Unauthenticated',
        //        ]
        //    ], 401
        // );
        return parent::render($request, $exception);
    }
}
