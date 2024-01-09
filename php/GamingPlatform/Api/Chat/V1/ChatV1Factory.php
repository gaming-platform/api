<?php

declare(strict_types=1);

namespace GamingPlatform\Api\Chat\V1;

// This file is auto-generated. Do not edit!

final class ChatV1Factory
{
    public static function createInitiateChat(
        string $data
    ): \GamingPlatform\Api\Chat\V1\InitiateChat {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\InitiateChat();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createInitiateChatResponse(
        string $data
    ): \GamingPlatform\Api\Chat\V1\InitiateChatResponse {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\InitiateChatResponse();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

    public static function createMessageWritten(
        string $data
    ): \GamingPlatform\Api\Chat\V1\MessageWritten {
        static $template;
        $template ??= new \GamingPlatform\Api\Chat\V1\MessageWritten();
        $message = clone $template;
        $message->mergeFromString($data);
        return $message;
    }

}
