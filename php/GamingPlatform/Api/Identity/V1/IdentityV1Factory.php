<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Identity\V1;

// This file is auto-generated. Do not edit!

/** @deprecated */
final class IdentityV1Factory
{
    /** @deprecated */
    public static function createBot(
        string $data
    ): \GamingPlatform\Api\Identity\V1\Bot {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\Bot();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createGetBotByUsername(
        string $data
    ): \GamingPlatform\Api\Identity\V1\GetBotByUsername {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\GetBotByUsername();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createGetBotByUsernameResponse(
        string $data
    ): \GamingPlatform\Api\Identity\V1\GetBotByUsernameResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\GetBotByUsernameResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createRegisterBot(
        string $data
    ): \GamingPlatform\Api\Identity\V1\RegisterBot {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\RegisterBot();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createRegisterBotResponse(
        string $data
    ): \GamingPlatform\Api\Identity\V1\RegisterBotResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\RegisterBotResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
    public static function createUserArrived(
        string $data
    ): \GamingPlatform\Api\Identity\V1\UserArrived {
        static $template;
        $template ??= new \GamingPlatform\Api\Identity\V1\UserArrived();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    /** @deprecated */
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
