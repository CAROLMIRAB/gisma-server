<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsesBody
{

    /**
     * responseSuccess
     *
     * @param  mixed $message
     * @param  mixed $code
     * @param  mixed $result
     * @return void
     */
    static public function responseSuccess($message, $code, $result)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];
        return response()->json($response, $code);
    }

    /**
     * responseError
     *
     * @param  mixed $message
     * @param  mixed $code
     * @param  mixed $errorMessages
     * @return void
     */
    static public function responseError($message, $code = 404, $errorMessages = [])
    {
        $response = [
            'success' => false,
            'message' => $message,
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
