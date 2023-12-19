<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
 * @OA\Info(
 *     version="1.0",
 *     title="Laravel Rest API",
 *     description="Laravel Rest API Swagger Documentation.",
 *     @OA\Contact(name="RestAPI")
 * )
 * @OA\PathItem(
 *    path="/api/v1"
 * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
