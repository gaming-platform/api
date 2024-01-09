<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Identity\V1;

// This file is auto-generated. Do not edit!

final class IdentityV1Factory
{
    public static function createUserArrived(
        string $data
    ): \GamingPlatform\Api\Identity\V1\UserArrived {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\UserArrived();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createUserSignedUp(
        string $data
    ): \GamingPlatform\Api\Identity\V1\UserSignedUp {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\UserSignedUp();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

}
