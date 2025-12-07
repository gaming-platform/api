<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Identity\V1;

// This file is auto-generated. Do not edit!

final class IdentityV1
{
    public const string BotType = 'Identity.Bot.v1';
    public static function createBot(
        ?string $data = null
    ): Bot {
        static $template;
        $template ??= new Bot();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string GetBotByUsernameType = 'Identity.GetBotByUsername.v1';
    public static function createGetBotByUsername(
        ?string $data = null
    ): GetBotByUsername {
        static $template;
        $template ??= new GetBotByUsername();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string GetBotByUsernameResponseType = 'Identity.GetBotByUsernameResponse.v1';
    public static function createGetBotByUsernameResponse(
        ?string $data = null
    ): GetBotByUsernameResponse {
        static $template;
        $template ??= new GetBotByUsernameResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string RegisterBotType = 'Identity.RegisterBot.v1';
    public static function createRegisterBot(
        ?string $data = null
    ): RegisterBot {
        static $template;
        $template ??= new RegisterBot();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string RegisterBotResponseType = 'Identity.RegisterBotResponse.v1';
    public static function createRegisterBotResponse(
        ?string $data = null
    ): RegisterBotResponse {
        static $template;
        $template ??= new RegisterBotResponse();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string UserArrivedType = 'Identity.UserArrived.v1';
    public static function createUserArrived(
        ?string $data = null
    ): UserArrived {
        static $template;
        $template ??= new UserArrived();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
    public const string UserSignedUpType = 'Identity.UserSignedUp.v1';
    public static function createUserSignedUp(
        ?string $data = null
    ): UserSignedUp {
        static $template;
        $template ??= new UserSignedUp();
        $message = clone $template;
        if ($data !== null) $message->mergeFromString($data);
        return $message;
    }
}
