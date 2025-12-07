<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Common\V1;

// This file is auto-generated. Do not edit!

final class CommonV1
{
    public static function createErrorResponse_Violation_Parameter(
        ?string $data = null
    ): ErrorResponse\Violation\Parameter {
        static $template;
        $template ??= new ErrorResponse\Violation\Parameter();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public static function createErrorResponse_Violation(
        ?string $data = null
    ): ErrorResponse\Violation {
        static $template;
        $template ??= new ErrorResponse\Violation();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string ErrorResponseType = 'Common.ErrorResponse.v1';
    public static function createErrorResponse(
        ?string $data = null
    ): ErrorResponse {
        static $template;
        $template ??= new ErrorResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
}
