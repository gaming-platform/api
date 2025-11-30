<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Common\V1;

// This file is auto-generated. Do not edit!

final class CommonV1Factory
{
    public static function createError_Violation_Parameter(
        string $data
    ): \GamingPlatform\Api\Common\V1\Error\Violation\Parameter {
        static $template;
        $template ??= new \GamingPlatform\Api\Common\V1\Error\Violation\Parameter();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createError_Violation(
        string $data
    ): \GamingPlatform\Api\Common\V1\Error\Violation {
        static $template;
        $template ??= new \GamingPlatform\Api\Common\V1\Error\Violation();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createError(
        string $data
    ): \GamingPlatform\Api\Common\V1\Error {
        static $template;
        $template ??= new \GamingPlatform\Api\Common\V1\Error();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

}
