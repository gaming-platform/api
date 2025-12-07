<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Common\V1;

// This file is auto-generated. Do not edit!

/** @deprecated */
final class CommonV1Factory
{
    /** @deprecated */
    public static function createErrorResponse_Violation_Parameter(
        string $data
    ): \GamingPlatform\Api\Common\V1\ErrorResponse\Violation\Parameter {
        static $template;
        $template ??= new \GamingPlatform\Api\Common\V1\ErrorResponse\Violation\Parameter();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createErrorResponse_Violation(
        string $data
    ): \GamingPlatform\Api\Common\V1\ErrorResponse\Violation {
        static $template;
        $template ??= new \GamingPlatform\Api\Common\V1\ErrorResponse\Violation();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createErrorResponse(
        string $data
    ): \GamingPlatform\Api\Common\V1\ErrorResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\Common\V1\ErrorResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

}
