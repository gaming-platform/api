<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Common\V1;

// This file is auto-generated. Do not edit!

final class CommonV1
{
    public const string ErrorResponse = 'Common.ErrorResponse.v1';
    public static function createErrorResponse(
        string $data
    ): ErrorResponse {
        static $template;
        $template ??= new ErrorResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }
}
